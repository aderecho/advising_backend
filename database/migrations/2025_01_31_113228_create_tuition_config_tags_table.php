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
    Schema::create('tuition_config_tags', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('tuition_config_id');
      $table->string('tag');
      $table->string('tag_type');
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
    Schema::dropIfExists('tuition_config_tags');
  }
};
