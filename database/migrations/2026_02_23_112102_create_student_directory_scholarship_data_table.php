<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('student_directory_scholarship_data', function (Blueprint $table) {
            $table->id();

            // FK column must exist before adding constraint
            $table->unsignedBigInteger('student_directory_id');

            $table->boolean('other_scholarship')->default(false);
            $table->text('scholarship_details')->nullable();
            $table->timestamps();

            $table->foreign('student_directory_id')
                ->references('id')
                ->on('student_directory')
                ->onDelete('cascade');

            $table->index('student_directory_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_directory_scholarship_data');
    }
};