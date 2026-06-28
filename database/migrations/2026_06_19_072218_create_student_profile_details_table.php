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
        Schema::create('student_profile_details', function (Blueprint $table) {
            $table->id('student_profile_details_id');
            $table->string('campus_id', 10);
            $table->unsignedBigInteger('program_id')->nullable();
            $table->unsignedBigInteger('curriculum_id')->nullable();
            $table->string('year_level')->nullable();
            $table->string('section')->nullable();
            $table->string('student_type')->nullable();
            $table->timestamps();

            $table->foreign('campus_id')->references('campus_id')->on('student_profiles');
            $table->foreign('program_id')->references('program_id')->on('programs');
            $table->foreign('curriculum_id')->references('curriculum_id')->on('curriculums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profile_details');
    }
};
