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
    Schema::table('student_scholarships', function (Blueprint $table) {
      $table->dropColumn('term_id');
      $table->unsignedBigInteger('student_scholarship_tag_id')->nullable()->change();
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
      $table->unsignedBigInteger('term_id');
      $table->unsignedBigInteger('student_scholarship_tag_id')->nullable(false)->change();
    });
  }
};
