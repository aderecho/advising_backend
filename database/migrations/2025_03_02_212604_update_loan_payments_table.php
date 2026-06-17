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
    Schema::table('loan_payments', function (Blueprint $table) {
      $table->renameColumn('amount', 'billed_amount');
      $table->float('amount_paid');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('loan_payments', function (Blueprint $table) {
      $table->renameColumn('billed_amount', 'amount');
      $table->dropColumn('amount_paid');
    });
  }
};
