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
        Schema::create('set_cfic_results', function (Blueprint $table) {
            $table->id();
            $table->integer('term_id');
            $table->integer('cfic_id');
            $table->float('mean')->nullable();
            $table->integer('mode')->nullable();
            $table->integer('set_question_id');
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
        Schema::dropIfExists('set_cfic_results');
    }
};