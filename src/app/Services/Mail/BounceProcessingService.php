<?php

namespace App\Services\Mail;

use App\Events\EmailBounced;
use App\Models\Subscriber;
use App\Models\Message;
use Illuminate\Support\Facades\Log;

/**
 * Shared bounce processing logic.
 *
 * Used by:
 * - BounceController (webhook-based bounces)
 * - BounceMailboxService (IMAP bounce scanning)
 * - SendEmailJob (inline SMTP error detection)
 */
class BounceProcessingService
{
    /**
     * Process a bounce event — mark subscriber as bounced and dispatch event.
     */
    public function processBounce(
        string $email,
        string $bounceType,
        string $bounceReason,
        ?string $messageId,
        string $provider
    ): void {
        Log::info("Bounce received from {$provider}", [
            'email' => $email,
            'type' => $bounceType,
            'reason' => $bounceReason,
        ]);

        // Find subscriber by email
        $subscriber = Subscriber::where('email', $email)->first();

        if (!$subscriber) {
            Log::warning("Bounce for unknown subscriber: {$email}");
            return;
        }

        // Find message if we have an ID
        $message = null;
        if ($messageId) {
            $message = Message::find($messageId);
        }

        // Process bounce for each list the subscriber belongs to
        $listsAffected = 0;
        foreach ($subscriber->contactLists as $list) {
            $settings = $list->settings ?? [];
            $bounceAnalysis = $settings['advanced']['bounce_analysis'] ?? true;

            if (!$bounceAnalysis) {
                Log::debug("Skipping bounce analysis for list {$list->id} - disabled in settings");
                continue;
            }

            // Get configurable settings with defaults for backward compatibility
            $bounceScope = $settings['advanced']['bounce_scope'] ?? 'list';
            $softBounceThreshold = $settings['advanced']['soft_bounce_threshold'] ?? 3;

            if ($bounceType === EmailBounced::TYPE_HARD) {
                // Hard bounce - immediate marking as bounced
                if ($bounceScope === 'global') {
                    $subscriber->update(['status' => 'bounced']);
                    Log::info("Hard bounce: marked subscriber {$subscriber->id} as bounced globally");
                } else {
                    $list->subscribers()->updateExistingPivot($subscriber->id, [
                        'status' => 'bounced',
                    ]);
                    Log::info("Hard bounce: marked subscriber {$subscriber->id} as bounced on list {$list->id}");
                }
                $listsAffected++;
            } else {
                // Soft bounce - increment counter
                $currentCount = $list->pivot->soft_bounce_count ?? 0;
                $newCount = $currentCount + 1;

                $updateData = ['soft_bounce_count' => $newCount];

                // Check against configurable threshold
                if ($newCount >= $softBounceThreshold) {
                    if ($bounceScope === 'global') {
                        $subscriber->update(['status' => 'bounced']);
                        Log::info("Soft bounce threshold reached: marked subscriber {$subscriber->id} as bounced globally (count: {$newCount}/{$softBounceThreshold})");
                    } else {
                        $updateData['status'] = 'bounced';
                        Log::info("Soft bounce threshold reached: marked subscriber {$subscriber->id} as bounced on list {$list->id} (count: {$newCount}/{$softBounceThreshold})");
                    }
                    $listsAffected++;
                } else {
                    Log::info("Soft bounce for subscriber {$subscriber->id} on list {$list->id} (count: {$newCount}/{$softBounceThreshold})");
                }

                $list->subscribers()->updateExistingPivot($subscriber->id, $updateData);
            }
        }

        Log::info("Bounce processing complete for {$email}", [
            'lists_affected' => $listsAffected,
            'bounce_type' => $bounceType,
        ]);

        // Dispatch event for automations
        event(new EmailBounced(
            messageId: $message?->id ?? 0,
            subscriberId: $subscriber->id,
            bounceType: $bounceType,
            bounceReason: $bounceReason
        ));
    }

    /**
     * Determine if an SMTP error message indicates a hard bounce.
     */
    public function isHardBounceError(string $error): bool
    {
        return (bool) preg_match(
            '/\b5\.[0-7]\.[0-9]\b|^550\b|^551\b|^552\b|^553\b|^554\b|User unknown|Mailbox not found|Recipient.*rejected|does not exist|no such user/i',
            $error
        );
    }

    /**
     * Determine if an SMTP error message indicates a soft bounce.
     */
    public function isSoftBounceError(string $error): bool
    {
        return (bool) preg_match(
            '/\b4\.[0-7]\.[0-9]\b|^450\b|^451\b|^452\b|mailbox full|over quota|try again|temporarily/i',
            $error
        );
    }
}
