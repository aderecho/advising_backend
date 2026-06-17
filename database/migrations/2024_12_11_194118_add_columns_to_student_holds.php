<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Author: Anthony Derecho
     * Date: December 13, 2024
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_holds', function (Blueprint $table) {
            $table->timestamp('start_date')->nullable(); //Required
            $table->timestamp('end_date')->nullable(); //Optional
            $table->text('remarks')->nullable(); //Optional
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_holds', function (Blueprint $table) {
            $table->dropColumn(['start_date', 'end_date', 'remarks']);
        });
    }
};