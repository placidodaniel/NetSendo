<?php

namespace App\Console\Commands;

use App\Models\Mailbox;
use App\Services\Mail\BounceMailboxService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class ProcessBounceMailboxCommand extends Command
{
    /**
     * The name and signature of the console command.
     */
    protected $signature = 'bounce:process-mailboxes
                            {--mailbox= : Process specific mailbox ID only}
                            {--dry-run : Show what would be processed without making changes}';

    /**
     * The console command description.
     */
    protected $description = 'Scan IMAP bounce mailboxes for delivery failures and mark subscribers accordingly';

    /**
     * Execute the console command.
     */
    public function handle(BounceMailboxService $bounceService): int
    {
        $this->info('📬 Starting bounce mailbox scan...');

        $isDryRun = $this->option('dry-run');
        $specificMailbox = $this->option('mailbox');

        if ($isDryRun) {
            $this->warn('⚠️  Dry-run mode — no subscribers will be updated');
        }

        // Get bounce-enabled mailboxes
        $query = Mailbox::bounceEnabled()->active();

        if ($specificMailbox) {
            $query->where('id', $specificMailbox);
        }

        $mailboxes = $query->get();

        if ($mailboxes->isEmpty()) {
            $this->info('📭 No bounce-enabled mailboxes found.');
            return self::SUCCESS;
        }

        $this->info("📋 Found {$mailboxes->count()} bounce-enabled mailbox(es)");

        $totalStats = [
            'mailboxes_processed' => 0,
            'total_scanned' => 0,
            'total_bounces' => 0,
            'total_hard' => 0,
            'total_soft' => 0,
            'total_errors' => 0,
        ];

        foreach ($mailboxes as $mailbox) {
            $this->line('');
            $this->info("🔍 Scanning: {$mailbox->name} ({$mailbox->bounce_imap_host})");

            if ($isDryRun) {
                $this->line("   Would scan folder: {$mailbox->bounce_imap_folder}");
                $this->line("   Last scanned: " . ($mailbox->bounce_last_scanned_at?->diffForHumans() ?? 'never'));
                continue;
            }

            try {
                $stats = $bounceService->scanMailbox($mailbox);

                $this->line("   📧 Scanned: {$stats['scanned']} messages");
                $this->line("   🔴 Hard bounces: {$stats['hard']}");
                $this->line("   🟡 Soft bounces: {$stats['soft']}");

                if ($stats['errors'] > 0) {
                    $this->warn("   ⚠️  Errors: {$stats['errors']}");
                }

                $totalStats['mailboxes_processed']++;
                $totalStats['total_scanned'] += $stats['scanned'];
                $totalStats['total_bounces'] += $stats['bounces_found'];
                $totalStats['total_hard'] += $stats['hard'];
                $totalStats['total_soft'] += $stats['soft'];
                $totalStats['total_errors'] += $stats['errors'];

            } catch (\Exception $e) {
                $this->error("   ❌ Failed: {$e->getMessage()}");
                Log::error("Bounce mailbox scan failed for mailbox {$mailbox->id}", [
                    'error' => $e->getMessage(),
                ]);
                $totalStats['total_errors']++;
            }
        }

        $this->line('');
        $this->info('✅ Bounce scan complete:');
        $this->line("   📬 Mailboxes processed: {$totalStats['mailboxes_processed']}");
        $this->line("   📧 Total scanned: {$totalStats['total_scanned']}");
        $this->line("   💥 Total bounces: {$totalStats['total_bounces']} (🔴 {$totalStats['total_hard']} hard, 🟡 {$totalStats['total_soft']} soft)");

        if ($totalStats['total_errors'] > 0) {
            $this->error("   ❌ Errors: {$totalStats['total_errors']}");
        }

        return self::SUCCESS;
    }
}
