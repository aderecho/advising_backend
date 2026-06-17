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
        Schema::create('requested_mentors', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->uuid('user_id');
            $table->integer('student_program_record_id');            
            $table->date('date_requested');
            $table->string('transaction_type', 200)->nullable();
            $table->string('status', 100);
            $table->integer('current_step')->nullable();
            $table->integer('workflow_id')->nullable();
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
        Schema::dropIfExists('requested_mentors');
    }
};
