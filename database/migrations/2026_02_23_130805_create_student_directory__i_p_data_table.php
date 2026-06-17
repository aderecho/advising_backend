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
        Schema::create('student_directory__i_p_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_directory_id');
            $table->boolean('ip_status')->default(false);
            $table->string('ip_group')->nullable();
            $table->string('ip_group_other')->nullable();
            $table->timestamps();

            $table->foreign('student_directory_id')->references('id')->on('student_directory')->onDelete('cascade');
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
        Schema::dropIfExists('student_directory__i_p_data');
    }
};
