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
    Schema::create('student_loans', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('term_id');
      $table->string('campus_id');
      $table->string('soa');
      $table->string('account');
      $table->float('loan_amount');
      $table->float('initial_payment');
      $table->string('co_debtor')->nullable();
      $table->text('co_debtor_address')->nullable();
      $table->date('application_date');
      $table->date('due_date');
      $table->text('remarks')->nullable();
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
    Schema::dropIfExists('student_loans');
  }
};
