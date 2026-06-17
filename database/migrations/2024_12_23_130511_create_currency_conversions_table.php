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
    Schema::create('currency_conversions', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('base_currency');
      $table->string('target_currency');
      $table->decimal('exchange_rate', 10, 2);
      $table->integer('term_id');
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
    Schema::dropIfExists('currency_conversions');
  }
};
