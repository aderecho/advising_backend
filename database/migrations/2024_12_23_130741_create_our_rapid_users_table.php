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
    Schema::create('our_rapid_users', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('username');
      $table->string('password');
      $table->string('email');
      $table->string('fullname');
      $table->string('groupid')->nullable();
      $table->integer('active');
      $table->string('ext_security_id')->nullable();
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
    Schema::dropIfExists('our_rapid_users');
  }
};
