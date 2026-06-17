<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
            UPDATE student_upscee su
            SET has_taken_upscee = true,
                updated_at = NOW()
            WHERE EXISTS (
                SELECT 1
                FROM upscee_response ur
                WHERE ur.term_id = su.term_id
                  AND ur.campus_id = su.campus_id
                  AND ur.class_id = su.class_id
                  AND ur.student_upscee_id = su.id
            )
        ");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::statement("
            UPDATE student_upscee su
            SET has_taken_upscee = false,
                updated_at = NOW()
            WHERE EXISTS (
                SELECT 1
                FROM upscee_response ur
                WHERE ur.term_id = su.term_id
                  AND ur.campus_id = su.campus_id
                  AND ur.class_id = su.class_id
                  AND ur.student_upscee_id = su.id
            )
        ");
    }
};