<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up()
    {
        Schema::table('student_terms', function (Blueprint $table) {
            $table->unique('term_id', 'student_terms_term_id_unique');
        });
    }

    public function down()
    {
        Schema::table('student_terms', function (Blueprint $table) {
            $table->dropUnique('student_terms_term_id_unique');
        });
    }
};