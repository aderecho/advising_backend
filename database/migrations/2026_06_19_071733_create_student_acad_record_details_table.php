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
        Schema::create('student_acad_record_details', function (Blueprint $table) {
            $table->id('record_detail_id');
            $table->unsignedBigInteger('acad_record_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('term_collections_id');
            $table->unsignedBigInteger('student_grade_id');
            $table->string('school_year')->nullable();
            $table->timestamps();

            $table->foreign('acad_record_id')->references('acad_record_id')->on('student_acad_records');
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->foreign('term_collections_id')->references('term_collections_id')->on('term_collections');
            $table->foreign('student_grade_id')->references('student_grade_id')->on('student_grade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_acad_record_details');
    }
};
