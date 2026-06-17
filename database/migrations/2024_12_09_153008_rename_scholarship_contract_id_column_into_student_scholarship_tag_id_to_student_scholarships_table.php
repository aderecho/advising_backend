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
      $table->renameColumn('scholarship_contract_id', 'student_scholarship_tag_id');
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
      $table->renameColumn('student_scholarship_tag_id', 'scholarship_contract_id');
    });
  }
};
