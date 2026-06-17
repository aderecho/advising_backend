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
    Schema::create('af__audit', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->timestamp('datetime');
      $table->string('ip', 255);
      $table->string('user', 255)->nullable();
      $table->string('table', 255)->nullable();
      $table->string('action', 255);
      $table->text('description')->nullable();
    });
  }

  public function down()
  {
    Schema::dropIfExists('af__audit');
  }
};
