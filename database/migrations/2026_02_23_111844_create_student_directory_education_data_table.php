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
        Schema::create('student_directory_education_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_directory_id');
            $table->string('senior_high_school')->nullable();
            $table->string('high_school_location')->nullable();
            $table->string('senior_high_honors')->nullable();
            $table->string('highest_education')->nullable();
            $table->string('undergraduate_degree')->nullable();
            $table->string('postgraduate_qualifications')->nullable();
            $table->string('last_school_attended')->nullable();
            $table->timestamps();

            $table->foreign('student_directory_id')
                ->references('id')
                ->on('student_directory')
                ->onDelete('cascade');

            $table->index('student_directory_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_directory_education_data');
    }
};
