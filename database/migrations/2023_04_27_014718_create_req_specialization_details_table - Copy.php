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
        Schema::create('req_specialization_details', function (Blueprint $table) {
            $table->id('id');
            $table->integer('req_specialization_id');
            $table->integer('req_id');
            $table->uuid('user_id');
            $table->integer('student_program_record_id');
            $table->integer('faculty_id');
            $table->integer('specialization_id');
            $table->string('specialization', 300);
            $table->string('specialized_curriculum_code', 200);
            $table->string('role', 100);
            $table->string('status', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('req_specialization_details');
    }
};
