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
        Schema::create('curriculum_courses_list', function (Blueprint $table) {
            $table->id();
            $table->integer('curriculum_id');
            $table->integer('course_id');
            $table->string('course_type');
            $table->string('sub_type');
            $table->timestamps();
            $table->unique(['curriculum_id', 'course_id', 'course_type'], 'curriculum_id_course_id_course_type_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_courses_list');
    }
};
