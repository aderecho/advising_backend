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
    Schema::create('tuition_configs', function (Blueprint $table) {
      $table->id(); // bigint auto-increment primary key
      $table->unsignedBigInteger('term_id');
      $table->string('label');
      $table->decimal('value', 10, 2);
      $table->string('currency');
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
    Schema::dropIfExists('tuition_configs');
  }
};
