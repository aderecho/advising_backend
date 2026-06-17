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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->integer('term_id');
            $table->integer('parent_class_id')->nullable();
            $table->string('type', 5);
            $table->string('section', 5);
            $table->string('date', 20);
            $table->boolean('mon');
            $table->boolean('tue');
            $table->boolean('wed');
            $table->boolean('thu');
            $table->boolean('fri');
            $table->boolean('sat');
            $table->string('start_time', 20)->nullable();
            $table->string('end_time', 20)->nullable();
            $table->integer('credit');
            $table->float('hours');
            $table->integer('tm_id');
            $table->integer('facility_id')->nullable();
            $table->integer('max_class_size');
            $table->integer('active_class_size');
            $table->string('activity');
            $table->integer('class_nbr');
            $table->integer('assoc');
            $table->string('acad_org', 10);
            $table->string('acad_group', 10);
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
        Schema::dropIfExists('classes');
    }
};
