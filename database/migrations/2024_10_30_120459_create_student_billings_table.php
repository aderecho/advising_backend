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
    Schema::create('student_billings', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('term_id');
      $table->string('campus_id');
      $table->string('student_name');
      $table->decimal('tuition_fee', 12, 2)->default(0);
      $table->decimal('misc_fee', 12, 2)->default(0);
      $table->decimal('lab_fees', 12, 2)->default(0);
      $table->decimal('total', 12, 2)->default(0);
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
    Schema::dropIfExists('student_billings');
  }
};
