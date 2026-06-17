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
        Schema::create('student_directory_campus_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_directory_id');
            $table->string('degree_program')->nullable();
            $table->string('category')->nullable()->default('Undergraduate'); // Undergraduate, etc
            $table->string('up_mail')->nullable();
            $table->boolean('privacy_checkbox')->default(false);
            $table->timestamps();

            $table->foreign('student_directory_id')
                ->references('id')
                ->on('student_directory')
                ->cascadeOnDelete();
            $table->index(['degree_program','up_mail']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_directory_campus_data');
    }
};
