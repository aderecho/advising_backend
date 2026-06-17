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
    Schema::create('s_student_grades', function (Blueprint $table) {
      $table->id();
      $table->string('course_code', 20);
      $table->string('section', 5);
      $table->bigInteger('faculty_id');
      $table->string('grade', 5);
      $table->string('status', 15);
      $table->text('remarks');
      $table->integer('term');
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
    Schema::dropIfExists('s_student_grades');
  }
};
