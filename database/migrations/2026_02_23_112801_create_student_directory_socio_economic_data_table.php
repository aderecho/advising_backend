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
        Schema::create('student_directory_socio_economic_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_directory_id');
            $table->boolean('is_beneficiary')->default(false);
            $table->string('beneficiary_program')->nullable();
            $table->boolean('first_gen_college')->default(false);
            $table->boolean('first_gen_up')->default(false);
            $table->string('household_income_range')->nullable();
            $table->string('household_income_range_alt')->nullable();
            $table->timestamps();
            $table->foreign('student_directory_id')
                ->references('id')
                ->on('student_directory')
                ->onDelete('cascade');
            $table->index('student_directory_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_directory_socio_economic_data');
    }
};
