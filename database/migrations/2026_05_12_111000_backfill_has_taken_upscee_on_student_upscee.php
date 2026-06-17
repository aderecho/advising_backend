<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            UPDATE student_upscee su
            SET has_taken_upscee = true,
                updated_at = NOW()
            WHERE EXISTS (
                SELECT 1
                FROM upscee_response ur
                WHERE ur.campus_id = su.campus_id
                  AND ur.class_id = su.class_id
            )
        ");
    }

    public function down(): void
    {
        DB::statement("
            UPDATE student_upscee su
            SET has_taken_upscee = false,
                updated_at = NOW()
            WHERE EXISTS (
                SELECT 1
                FROM upscee_response ur
                WHERE ur.campus_id = su.campus_id
                  AND ur.class_id = su.class_id
            )
        ");
    }
};