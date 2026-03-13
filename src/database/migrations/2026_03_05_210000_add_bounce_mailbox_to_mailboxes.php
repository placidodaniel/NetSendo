<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('mailboxes', function (Blueprint $table) {
            // Bounce mailbox monitoring via IMAP
            $table->boolean('bounce_enabled')->default(false)->after('last_test_message');
            $table->string('bounce_imap_host')->nullable()->after('bounce_enabled');
            $table->unsignedSmallInteger('bounce_imap_port')->default(993)->after('bounce_imap_host');
            $table->enum('bounce_imap_encryption', ['ssl', 'tls', 'none'])->default('ssl')->after('bounce_imap_port');
            $table->text('bounce_imap_credentials')->nullable()->after('bounce_imap_encryption');
            $table->string('bounce_imap_folder', 100)->default('INBOX')->after('bounce_imap_credentials');
            $table->timestamp('bounce_last_scanned_at')->nullable()->after('bounce_imap_folder');
            $table->unsignedInteger('bounce_last_scan_count')->default(0)->after('bounce_last_scanned_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mailboxes', function (Blueprint $table) {
            $table->dropColumn([
                'bounce_enabled',
                'bounce_imap_host',
                'bounce_imap_port',
                'bounce_imap_encryption',
                'bounce_imap_credentials',
                'bounce_imap_folder',
                'bounce_last_scanned_at',
                'bounce_last_scan_count',
            ]);
        });
    }
};
