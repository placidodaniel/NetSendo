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
            $table->json('reputation_status')->nullable()->after('bounce_last_scan_count');
            $table->timestamp('reputation_checked_at')->nullable()->after('reputation_status');
            $table->string('reputation_overall', 20)->default('unchecked')->after('reputation_checked_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mailboxes', function (Blueprint $table) {
            $table->dropColumn([
                'reputation_status',
                'reputation_checked_at',
                'reputation_overall',
            ]);
        });
    }
};
