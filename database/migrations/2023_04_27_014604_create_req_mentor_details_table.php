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
        Schema::create('req_mentor_details', function (Blueprint $table) {
            $table->id('id');
            $table->string('requested_mentor_id');
            $table->integer('faculty_id');
            $table->uuid('user_id');
            $table->integer('student_program_record_id');
            $table->string('role', 100);
            $table->string('justification', 200)->nullable();            
            $table->string('action', 100);
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
        Schema::dropIfExists('req_mentor_details');
    }
};
