<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
    Schema::table('student_scholarships', function (Blueprint $table) {
      DB::statement('ALTER TABLE student_scholarships DROP CONSTRAINT IF EXISTS student_scholarships_student_scholarship_tag_id_foreign');
      $table->foreign('student_scholarship_tag_id')
        ->references('id')
        ->on('student_scholarship_tags')
        ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('student_scholarships', function (Blueprint $table) {
      DB::statement('ALTER TABLE student_scholarships DROP CONSTRAINT IF EXISTS student_scholarships_student_scholarship_tag_id_foreign');
      $table->foreign('student_scholarship_tag_id')
        ->references('id')
        ->on('student_scholarship_tags');
    });
  }
};
