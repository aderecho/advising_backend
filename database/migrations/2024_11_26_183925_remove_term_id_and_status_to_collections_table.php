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
    Schema::table('collections', function (Blueprint $table) {
      $table->dropColumn('term_id');
      $table->dropColumn('status');
      $table->dateTime('date')->change();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('collections', function (Blueprint $table) {
      $table->unsignedBigInteger('term_id');
      $table->string('status');
      $table->date('date')->change();
    });
  }
};
