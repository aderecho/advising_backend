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
    Schema::table('removal_completion_grades', function (Blueprint $table) {
      $table->string('file_name')->nullable()->change();
    });

    DB::statement('ALTER TABLE removal_completion_grades ALTER COLUMN posted_by TYPE UUID USING posted_by::uuid');
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('removal_completion_grades', function (Blueprint $table) {
      $table->string('file_name')->nullable(false)->change();
    });
    
    DB::statement('ALTER TABLE removal_completion_grades ALTER COLUMN posted_by TYPE VARCHAR(255)');
  }
};
