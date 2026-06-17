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
    Schema::table('curriculum_structures', function (Blueprint $table) {
      $table->integer('major_units')->default(0)->change();
      $table->integer('ge_elective_units')->default(0)->change();
      $table->integer('required_units')->default(0)->change();
      $table->integer('elective_units')->default(0)->change();
      $table->integer('cognate_units')->default(0)->change();
      $table->integer('specialized_units')->default(0)->change();
      $table->integer('track_units')->default(0)->change();
      $table->integer('total_units')->default(0)->change();
      $table->integer('major_count')->default(0)->change();
      $table->integer('ge_elective_count')->default(0)->change();
      $table->integer('required_count')->default(0)->change();
      $table->integer('elective_count')->default(0)->change();
      $table->integer('cognate_count')->default(0)->change();
      $table->integer('specialized_count')->default(0)->change();
      $table->integer('track_count')->default(0)->change();
      $table->integer('total_count')->default(0)->change();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('curriculum_structures', function (Blueprint $table) {
      //
    });
  }
};
