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
        Schema::create('grade_types', function (Blueprint $table) {
            $table->id();
            $table->string('type', 20);
            $table->string('grade', 15);
            $table->string('indicator', 10);
            $table->boolean('is_calculable');
            $table->string('is_creditable', 30);
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
        Schema::dropIfExists('grade_types');
    }
};
