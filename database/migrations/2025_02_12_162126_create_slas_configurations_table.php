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
    Schema::create('slas_configurations', function (Blueprint $table) {
      $table->id();
      $table->bigInteger('slas_id');
      $table->string('coverage_type');
      $table->string('coverage');
      $table->double('coverage_value');
      $table->string('tag')->nullable();
      $table->string('tag_type')->nullable();
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
    Schema::dropIfExists('s_configurations');
  }
};
