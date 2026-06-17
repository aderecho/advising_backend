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
        Schema::create('class_faculty_in_charge', function (Blueprint $table) {
            $table->id();
            $table->integer('class_id');
            $table->integer('faculty_id')->nullable();
            $table->string('mode', 50)->nullable();
            $table->string('type', 10);
            $table->string('status', 20);
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
        Schema::dropIfExists('class_faculty_in_charge');
    }
};
