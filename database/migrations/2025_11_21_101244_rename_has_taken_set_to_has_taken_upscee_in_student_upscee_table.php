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
        Schema::table('student_upscee', function (Blueprint $table) {
            $table->renameColumn('has_taken_set', 'has_taken_upscee');
        });
    }

    public function down()
    {
        Schema::table('student_upscee', function (Blueprint $table) {
            $table->renameColumn('has_taken_upscee', 'has_taken_set');
        });
    }

};
