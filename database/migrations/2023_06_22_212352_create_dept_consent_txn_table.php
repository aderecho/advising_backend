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
        Schema::create('dept_consent_txn', function (Blueprint $table) {
            $table->bigIncrements('id')->from(34644);
            $table->string('dept_cons_id', 15);
            $table->string('action', 20);
            $table->integer('committed_by');
            $table->text('note');
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
        Schema::dropIfExists('dept_consent_txn');
    }
};
