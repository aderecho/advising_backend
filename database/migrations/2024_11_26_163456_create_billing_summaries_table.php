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
    Schema::create('billing_summaries', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('term_id');
      $table->string('campus_id');
      $table->string('reference_code');
      $table->float('billed_amount');
      $table->float('amount_paid');
      $table->string('purpose');
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
    Schema::dropIfExists('billing_summaries');
  }
};
