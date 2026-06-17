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
    Schema::create('query_template_join_conditions', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('query_template_table_id');
      $table->string('field_name');
      $table->string('connecting_table');
      $table->string('connecting_field');
      $table->string('join_operator');
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
    Schema::dropIfExists('query_template_join_conditions');
  }
};
