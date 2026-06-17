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
        Schema::create('student_directory_address_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_directory_id');
            $table->enum('address_type', ['present', 'permanent'])->default('present');
            $table->string('rm_flr_unit_bldg', 150)->nullable();
            $table->string('house_lot_blk', 80)->nullable();
            $table->string('street', 120)->nullable();
            $table->string('subdivision', 120)->nullable();
            $table->string('barangay', 120)->nullable();
            $table->string('city_municipality', 120)->nullable();
            $table->string('province', 120)->nullable();
            $table->string('country', 120)->default('Philippines');
            $table->string('post_code', 10)->nullable();
            $table->timestamps();

            $table->foreign('student_directory_id')
                ->references('id')
                ->on('student_directory')
                ->cascadeOnDelete();
            $table->index([
                'present_city_municipality',
                'present_province',
                'present_country',
            ]);


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_directory_address_data');
    }
};
