<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounting_rapid_users', function (Blueprint $table) {
            $table->id(); // bigint primary key
            $table->string('username', 191);
            $table->string('password', 191);
            $table->string('email', 191);
            $table->string('fullname', 191);
            $table->string('groupid', 191)->nullable();
            $table->integer('active')->default(1);
            $table->string('ext_security_id', 191)->nullable();
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
        Schema::dropIfExists('accounting_rapid_users');
    }
};
