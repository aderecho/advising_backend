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
        Schema::table('class_dates', function (Blueprint $table) {
            //
            $table->boolean('sun')->default(false)->before('mon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('class_dates', function (Blueprint $table) {
            //
            $table->dropColumn('sun');
        });
    }
};