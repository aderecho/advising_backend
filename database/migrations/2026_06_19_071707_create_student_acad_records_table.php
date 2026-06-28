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
        Schema::create('student_acad_records', function (Blueprint $table) {
            $table->id('acad_record_id');
            $table->string('student_id',10);
            $table->unsignedBigInteger('course_id');
            $table->timestamps();

            $table->foreign('student_id')->references('campus_id')->on('student_profiles');
            $table->foreign('course_id')->references('course_id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_acad_records');
    }
};
