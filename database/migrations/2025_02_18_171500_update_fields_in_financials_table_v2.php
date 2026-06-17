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
        Schema::table('courses_with_lab_fees', function (Blueprint $table) {
            $table->string('career');
        });

        Schema::table('total_fees', function (Blueprint $table) {
            $table->integer('responsibility_center');
        });

        DB::statement('ALTER TABLE total_fees ALTER COLUMN locked TYPE boolean USING (locked)::boolean');

        Schema::table('student_tags', function (Blueprint $table) {
            $table->integer('term_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses_with_lab_fees', function (Blueprint $table) {
            $table->dropColumn('career');
        });

        Schema::table('total_fees', function (Blueprint $table) {
            $table->dropColumn('responsibility_center');
        });

        DB::statement('ALTER TABLE total_fees ALTER COLUMN locked TYPE character varying USING (locked)::character varying');

        Schema::table('student_tags', function (Blueprint $table) {
            $table->dropColumn('term_id');
        });
    }
};
