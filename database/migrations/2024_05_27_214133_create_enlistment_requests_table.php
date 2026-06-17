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
        Schema::create('enlistment_requests', function (Blueprint $table) {
            $table->string('id', 15)->primary();
            $table->integer('term');
            $table->integer('class_id');
            $table->string('status', 20);
            $table->integer('sais_id');
            $table->text('comment');
            $table->string('type', 20);
            $table->integer('current_step')->nullable();
            $table->integer('workflow_id')->nullable();
            $table->string('last_action', 25)->nullable();
            $table->dateTime('last_action_date')->nullable();
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
        Schema::dropIfExists('enlistment_requests');
    }
};
