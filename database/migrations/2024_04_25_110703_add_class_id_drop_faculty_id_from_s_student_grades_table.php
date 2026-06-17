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
      $table->dropColumn('faculty_id');
      $table->bigInteger('class_id');
      $table->string('grade', 5)->nullable()->change();
      $table->string('status', 15)->default("For Encoding")->change();
      $table->text('remarks')->nullable()->change();
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
      $table->integer('faculty_id');
      $table->dropColumn('class_id');
      $table->string('grade', 5)->nullable(false)->change();
      $table->string('status', 15)->change();
      $table->text('remarks')->nullable(false)->change();
    });
  }
};
