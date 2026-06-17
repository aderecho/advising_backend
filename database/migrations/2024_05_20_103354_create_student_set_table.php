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
        Schema::create('student_sets', function (Blueprint $table) {
            $table->id();
            $table->string('student_id', 10);
            $table->integer('cfic_id');
            $table->boolean('has_taken_set');
            $table->integer('term_id');
            $table->timestamps();
            $table->unique(['student_id', 'cfic_id', 'term_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_set');
    }
};
