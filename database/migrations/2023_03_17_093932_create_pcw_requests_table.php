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
        Schema::create('pcw_requests', function (Blueprint $table) {
            $table->string('pcw_id', 15)->primary();
            $table->string('pcw_type');
            $table->uuid('user_id');
            $table->string('status');
            $table->integer('term_id');
            $table->text('comment');
            $table->integer('workflow_id');
            $table->integer('current_step');
            $table->string('version');
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
        Schema::dropIfExists('pcw_requests');
    }
};
