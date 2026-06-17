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
    Schema::create('student_scholarships', function (Blueprint $table) {
      $table->id();
      $table->string('campus_id');
      $table->unsignedBigInteger('term_id');
      $table->unsignedBigInteger('term_start');
      $table->unsignedBigInteger('term_end');
      $table->string('status')->nullable();
      $table->integer('loa_count')->nullable();
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
    Schema::dropIfExists('student_scholarships');
  }
};
