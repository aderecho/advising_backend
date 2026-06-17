<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement("
            UPDATE upscee_response ur
            SET student_upscee_id = su.id,
                class_id = su.class_id
            FROM student_upscee su
            WHERE su.campus_id = ur.campus_id
              AND su.term_id = ur.term_id
              AND su.course_id = ur.course_id

        ");
    }

    public function down(): void
    {
        DB::statement("
            UPDATE upscee_response
            SET student_upscee_id = NULL,
                class_id = NULL
        ");
    }
};