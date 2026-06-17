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
        Schema::table('student_application_tracers', function (Blueprint $table) {
            //
            $table->string('term_id')->nullable()->after('application_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_application_tracers', function (Blueprint $table) {
            //
            $table->dropColumn('term_id');
        });
    }
};
