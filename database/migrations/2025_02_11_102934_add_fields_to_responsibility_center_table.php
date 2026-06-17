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
    Schema::table('responsibility_center', function (Blueprint $table) {
      $table->string('fee')->nullable();
      $table->string('type')->nullable();
      $table->string('sub_function')->nullable();
      $table->string('uacs')->nullable();
      $table->string('fund_code')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('responsibility_center', function (Blueprint $table) {
      $table->dropColumn(['fee', 'type', 'sub_function', 'uacs', 'fund_code']);
    });
  }
};
