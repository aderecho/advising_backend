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
        Schema::table('student_program_records', function (Blueprint $table) {
            //
            $table->boolean('is_graduating')->default(false)->after('campus_id')->comment('Indicates if the student is graduating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_program_records', function (Blueprint $table) {
            //
             $table->dropColumn('is_graduating');
        });
    }
};
