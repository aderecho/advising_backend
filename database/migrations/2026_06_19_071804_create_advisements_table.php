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
        Schema::create('advisements', function (Blueprint $table) {
            $table->id('advisement_id');
            $table->string('student_id', 10);
            $table->unsignedBigInteger('faculty_in_charge_id');
            $table->timestamp('date_created')->nullable();
            $table->string('eligibility_status')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('student_id')->references('campus_id')->on('student_profiles');
            $table->foreign('faculty_in_charge_id')->references('faculty_id')->on('faculties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advisements');
    }
};
