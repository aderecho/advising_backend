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
        Schema::create('courses_with_lab_fees', function (Blueprint $table) {
            $table->id();
            $table->integer('course_id');
            $table->string('institution');
            $table->string('acad_group');
            $table->string('subject');
            $table->string('catalog');
            $table->float('flat_amount', 20, 0);
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
        Schema::dropIfExists('courses_with_lab_fees');
    }
};
