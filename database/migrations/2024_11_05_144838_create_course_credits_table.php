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
        Schema::create('course_credits', function (Blueprint $table) {
            $table->id();
            $table->string('campus_id');
            $table->string('career');
            $table->string('institution');
            $table->integer('term_id');
            $table->integer('group');
            $table->integer('seq_no');
            $table->string('status');
            $table->integer('year');
            $table->string('course_no');
            $table->text('course_description');
            $table->float('unit_taken');
            $table->string('grade_in');
            $table->integer('course_id_equivalent');
            $table->integer('offer_number');
            $table->integer('units_transfer');
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
        Schema::dropIfExists('course_credits');
    }
};
