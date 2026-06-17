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
    Schema::create('student_accounts', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('collection_id')->nullable();
      $table->string('reference_code');
      $table->float('amount');
      $table->unsignedBigInteger('term_id');
      $table->string('campus_id');
      $table->text('note')->nullable();
      $table->string('purpose');
      $table->string('type');
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
    Schema::dropIfExists('student_accounts');
  }
};
