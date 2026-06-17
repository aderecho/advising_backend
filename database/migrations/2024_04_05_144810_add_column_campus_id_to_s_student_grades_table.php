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
      $table->string('campus_id', 10)->after('term');
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
      $table->dropColumn('campus_id');
    });
  }
};
