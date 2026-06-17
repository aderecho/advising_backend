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
    Schema::create('loan_officers', function (Blueprint $table) {
      $table->id();
      $table->string('username', 191);
      $table->string('password', 191);
      $table->string('email', 191);
      $table->string('fullname', 191);
      $table->string('groupid', 191);
      $table->integer('active');
      $table->string('ext_security_id', 191);
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
    Schema::dropIfExists('loan_officers');
  }
};
