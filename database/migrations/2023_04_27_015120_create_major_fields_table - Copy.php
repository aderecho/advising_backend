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
        Schema::create('major_fields', function (Blueprint $table) {
            $table->id('id');
            $table->integer('degree_program_id');
            $table->string('type', 200);
            $table->string('major_field', 200);
            $table->string('major_curriculum', 200);
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
        Schema::dropIfExists('major_fields');
    }
};
