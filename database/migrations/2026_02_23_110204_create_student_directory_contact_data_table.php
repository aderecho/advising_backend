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
        Schema::create('student_directory_contact_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_directory_id');
            $table->string('mobile_number', 15)->nullable();
            $table->string('home_phone_number', 15)->nullable();
            $table->string('personal_email_address')->nullable();
            $table->timestamps();

            $table->foreign('student_directory_id')
                ->references('id')
                ->on('student_directory')
                ->cascadeOnDelete();
            $table->index(['mobile_number', 'home_phone_number', 'personal_email_address']);
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_directory_contact_data');
    }
};
