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
        Schema::create('req_specializations', function (Blueprint $table) {
            $table->id('id');
            $table->string('requested_mentor_id');
            $table->uuid('user_id');
            $table->integer('student_program_record_id');
            $table->integer('faculty_id');
            $table->integer('curriculum_id');
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
        Schema::dropIfExists('req_specializations');
    }
};
