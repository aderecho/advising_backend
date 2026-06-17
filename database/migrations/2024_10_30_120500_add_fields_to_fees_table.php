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
    Schema::table('fees', function (Blueprint $table) {
      $table->string('acad_group')->nullable();
      $table->integer('responsibility_center')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('fees', function (Blueprint $table) {
      $table->dropColumn('acad_group');
      $table->dropColumn('responsibility_center');
    });
  }
};
