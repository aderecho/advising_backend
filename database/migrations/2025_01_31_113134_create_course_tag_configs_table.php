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
    Schema::create('course_tag_configs', function (Blueprint $table) {
      $table->id();
      $table->string('tag_name');
      $table->string('reference_model');
      $table->string('reference_field');
      $table->string('reference_type');
      $table->string('reference_operation');
      $table->string('reference_value');
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
    Schema::dropIfExists('course_tag_configs');
  }
};
