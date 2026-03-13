<?php

namespace App\Console\Commands;

use App\Services\Mail\MailboxReputationService;
use Illuminate\Console\Command;

class CheckMailboxReputationCommand extends Command
{
    protected $signature = 'mailbox:check-reputation {--mailbox= : Check specific mailbox ID}';

    protected $description = 'Check all active mailbox domains against DNS blacklists';

    public function __construct(
        private MailboxReputationService $reputationService
    ) {
        parent::__construct();
    }

    public function handle(): int
    {
        $mailboxId = $this->option('mailbox');

        if ($mailboxId) {
            $mailbox = \App\Models\Mailbox::find($mailboxId);
            if (!$mailbox) {
                $this->error("Mailbox with ID {$mailboxId} not found.");
                return Command::FAILURE;
            }

            $domain = $this->reputationService->extractDomain($mailbox->from_email);
            $this->info("Checking reputation for: {$mailbox->from_email} (domain: {$domain})");

            $results = $this->reputationService->checkAndUpdateMailbox($mailbox);

            $listedCount = count(array_filter(array_column($results, 'listed')));
            $this->info("Check completed: {$listedCount} blacklist(s) detected.");

            // Show table with results
            $rows = [];
            foreach ($results as $key => $result) {
                $rows[] = [
                    $result['name'],
                    $result['severity'],
                    $result['listed'] ? '⚠ LISTED' : '✓ Clean',
                ];
            }

            $this->table(['Blacklist', 'Severity', 'Status'], $rows);

            return Command::SUCCESS;
        }

        $this->info('Checking mailbox domain reputations...');

        $checked = $this->reputationService->processScheduledChecks();

        $this->info("Reputation checks completed: {$checked} mailbox(es) processed.");

        return Command::SUCCESS;
    }
}
