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
    Schema::table('scholarship_billings', function (Blueprint $table) {
      $table->boolean('locked')->nullable()->change();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('scholarship_billings', function (Blueprint $table) {
      $table->boolean('locked')->nullable(false)->change();

    });
  }
};
