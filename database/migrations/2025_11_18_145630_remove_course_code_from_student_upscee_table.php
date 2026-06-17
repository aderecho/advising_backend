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
            if (Schema::hasColumn('student_upscee', 'course_code')) {
                $table->dropColumn('course_code');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_upscee', function (Blueprint $table) {
            $table->string('course_code')->nullable();
        });
    }
};
