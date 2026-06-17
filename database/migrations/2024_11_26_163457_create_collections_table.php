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
    Schema::create('collections', function (Blueprint $table) {
      $table->id();
      $table->date('date');
      $table->string('gateway_status');
      $table->unsignedBigInteger('gateway_reference_no')->nullable();
      $table->string('student_name');
      $table->unsignedBigInteger('term_id');
      $table->string('campus_id');
      $table->string('contact_no')->nullable();
      $table->string('college_and_sem')->nullable();
      $table->float('amount');
      $table->string('gateway');
      $table->string('reference_code')->nullable();
      $table->string('purpose_of_payment');
      $table->string('status');
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
    Schema::dropIfExists('collections');
  }
};
