<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::table('prerogs', function (Blueprint $table) {
            $table->string('student_number', 10)->nullable();
            $table->integer('sais_id')->nullable()->change();
        });

        DB::statement('UPDATE prerogs SET student_number = students.campus_id FROM students WHERE prerogs.sais_id = students.sais_id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prerogs', function (Blueprint $table) {
            $table->dropColumn(['student_number']);
            $table->integer('sais_id')->nullable(false)->change();
        });
    }
};
