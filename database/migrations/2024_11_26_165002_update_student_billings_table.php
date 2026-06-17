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
    Schema::table('student_billings', function (Blueprint $table) {
      // Add new columns
      $table->string('reference_code')->after('term_id');
      $table->string('matriculation_type')->after('reference_code');
      $table->float('amount')->after('matriculation_type');

      // Drop unnecessary columns
      $table->dropColumn(['student_name', 'tuition_fee', 'misc_fee', 'lab_fees', 'total']);
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {

    Schema::table('student_billings', function (Blueprint $table) {
      // Rollback: remove newly added columns
      $table->dropColumn(['reference_code', 'matriculation_type', 'amount']);

      // Re-add the dropped columns
      $table->string('student_name')->nullable();
      $table->float('tuition_fee')->nullable();
      $table->float('misc_fee')->nullable();
      $table->float('lab_fees')->nullable();
      $table->float('total')->nullable();
    });
  }
};
