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
        Schema::create('advisement_details', function (Blueprint $table) {
            $table->id('advisement_details_id');
            $table->unsignedBigInteger('advisement_id');
            $table->unsignedBigInteger('course_id');
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('advisement_id')->references('advisement_id')->on('advisements');
            $table->foreign('course_id')->references('course_id')->on('courses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advisement_details');
    }
};
