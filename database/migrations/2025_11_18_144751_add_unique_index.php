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
            //
             $table->unique(
                ['campus_id', 'course_id', 'term_id', 'class_id'],
                'student_upscee_campus_course_term_class_unique'
            );
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
            //
            $table->dropUnique('student_upscee_campus_course_term_class_unique');
       
        });
    }
};
