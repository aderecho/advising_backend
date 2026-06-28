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
        Schema::table('curriculum_courses', function (Blueprint $table) {
            $table->unsignedBigInteger('term_collections_id')->nullable();
            $table->unsignedBigInteger('prerequisite_course_id')->nullable();
            
            $table->foreign('curriculum_id')->references('curriculum_id')->on('curriculums');
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('term_collections_id')->references('term_collections_id')->on('term_collections');
            $table->foreign('prerequisite_course_id')->references('course_id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('curriculum_courses', function (Blueprint $table) {
            //
        });
    }
};
