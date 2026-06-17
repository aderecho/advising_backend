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
    Schema::table('s_student_grades', function (Blueprint $table) {
      $table->unique(['campus_id', 'class_id', 'term']); // Add unique constraint
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('s_student_grades', function (Blueprint $table) {
      $table->dropUnique(['campus_id', 'class_id', 'term']); // Drop unique constraint
    });
  }
};
