<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::statement('ALTER TABLE email_send_logs ALTER COLUMN user_id TYPE varchar(255)');
    }

    public function down(): void
    {
        DB::statement('ALTER TABLE email_send_logs ALTER COLUMN user_id TYPE bigint USING NULL');
    }
};