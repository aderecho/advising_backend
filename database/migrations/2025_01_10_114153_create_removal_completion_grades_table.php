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
    Schema::create('removal_completion_grades', function (Blueprint $table) {
      $table->id();
      $table->string('campus_id', 10);
      $table->integer('term');
      $table->string('section', 11);
      $table->double('unit_taken', 8, 2);
      $table->unsignedBigInteger('course_id');
      $table->string('grade', 5);
      $table->text('remarks')->nullable();
      $table->string('college', 10);
      $table->string('grade_type', 20);
      $table->string('status', 10)->default('ACTIVE');
      $table->string('posted_by');
      $table->string('file_name', 191);
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
    Schema::dropIfExists('removal_completion_grades');
  }
};
