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
        Schema::create('student_directory_basic_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('student_directory_id');
            $table->string('first_name')->index();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->index();
            $table->string('suffix')->nullable();
            $table->string('preferred_name')->nullable();
            $table->string('sex')->nullable()->index();
            $table->string('sex_at_birth')->nullable();
            $table->string('civil_status')->nullable()->index();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable()->index();

            $table->timestamps();
            
            $table->foreign('student_directory_id')
                ->references('id')
                ->on('student_directory')
                ->cascadeOnDelete();
                
            $table->index(['last_name', 'first_name']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_directory_basic_information');
    }
};
