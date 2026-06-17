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
    Schema::create('query_template_tables', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('query_template_id');
      $table->string('table_name');
      $table->integer('sequence');
      $table->string('join_type')->nullable();
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
    Schema::dropIfExists('query_template_tables');
  }
};
