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
    Schema::create('contract_configurations', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('scholarship_contract_id');
      $table->string('coverage_type');
      $table->string('coverage');
      $table->float('coverage_value');
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
    Schema::dropIfExists('contract_configurations');
  }
};
