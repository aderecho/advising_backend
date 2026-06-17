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
        Schema::create('loan_billings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_loan_id');
            $table->string('soa')->nullable();
            $table->date('due_date')->nullable();
            $table->double('principal')->nullable();
            $table->double('interest')->nullable();
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
        Schema::dropIfExists('loan_billings');
    }
};
