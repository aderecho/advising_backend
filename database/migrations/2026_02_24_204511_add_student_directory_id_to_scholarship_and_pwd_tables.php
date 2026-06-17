<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        // Scholarship
        Schema::table('student_directory_scholarship_data', function (Blueprint $table) {
            if (!Schema::hasColumn('student_directory_scholarship_data', 'student_directory_id')) {
                $table->unsignedBigInteger('student_directory_id')->after('id');
                $table->index('student_directory_id');
                $table->foreign('student_directory_id')
                    ->references('id')->on('student_directory')
                    ->onDelete('cascade');
            }
        });

        // PWD
        Schema::table('student_directory_pwd_data', function (Blueprint $table) {
            if (!Schema::hasColumn('student_directory_pwd_data', 'student_directory_id')) {
                $table->unsignedBigInteger('student_directory_id')->after('id');
                $table->index('student_directory_id');
                $table->foreign('student_directory_id')
                    ->references('id')->on('student_directory')
                    ->onDelete('cascade');
            }
        });
    }

    public function down(): void
    {
        // optional (drop FKs/columns) - keep if you want rollback support
        Schema::table('student_directory_scholarship_data', function (Blueprint $table) {
            $table->dropForeign(['student_directory_id']);
            $table->dropColumn('student_directory_id');
        });
        Schema::table('student_directory_pwd_data', function (Blueprint $table) {
            $table->dropForeign(['student_directory_id']);
            $table->dropColumn('student_directory_id');
        });
    }
};