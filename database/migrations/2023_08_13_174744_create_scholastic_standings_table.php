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
        Schema::create('scholastic_standings', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('term_id');
            $table->string('standing');
            $table->string('placed_by');
            $table->string('department');
            $table->integer('acad_units');
            $table->integer('non_acad_units');
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
        Schema::dropIfExists('scholastic_standings');
    }
};
