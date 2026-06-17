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
        Schema::create('student_upscee', function (Blueprint $table) {
            $table->id();
            $table->string('campus_id', 10);
            $table->integer('class_id');
            $table->boolean('has_taken_set')->default(false);
            $table->integer('term_id');
            $table->timestamps();
            $table->unique(['campus_id', 'class_id', 'term_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_upscee');
    }
};
