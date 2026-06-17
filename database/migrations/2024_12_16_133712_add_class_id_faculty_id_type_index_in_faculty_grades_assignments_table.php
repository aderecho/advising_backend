<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faculty_grades_assignments', function (Blueprint $table) {
            $table->unique(['class_id', 'faculty_id', 'type']); // Add unique constraint
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faculty_grades_assignments', function (Blueprint $table) {
            $table->dropUnique(['class_id', 'faculty_id', 'type']); // Drop unique constraint
        });
    }
};
