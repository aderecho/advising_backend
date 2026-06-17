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
        Schema::create('degree_programs', function (Blueprint $table) {
            $table->id('id');
            $table->integer('program_id');
            $table->integer('curriculum_id');
            $table->string('curriculum_code', 200);
            $table->string('degree_program_code', 200);
            $table->string('degree_program_name', 200);
            $table->string('mode', 100);
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
        Schema::dropIfExists('degree_programs');
    }
};
