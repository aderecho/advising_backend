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
    Schema::table('ocs_rapid_users', function (Blueprint $table) {
      $table->string('username')->nullable()->change();
      $table->string('groupid')->nullable()->change();
      $table->string('ext_security_id')->nullable()->change();
    });
  }

  public function down()
  {
    Schema::table('ocs_rapid_users', function (Blueprint $table) {
      $table->string('username')->nullable(false)->change();
      $table->string('groupid')->nullable(false)->change();
      $table->string('ext_security_id')->nullable(false)->change();
    });
  }
};
