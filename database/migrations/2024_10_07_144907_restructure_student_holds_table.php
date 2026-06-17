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
        Schema::table('student_holds', function (Blueprint $table) {
            $table->dropColumn(['sais_id', 'student_id', 'holds', 'department']);
            $table->integer('hold_id');
            $table->uuid('user_id');
        });

        DB::statement('ALTER TABLE student_holds ALTER COLUMN placed_by TYPE UUID USING (placed_by)::UUID');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_holds', function (Blueprint $table) {
            $table->integer('sais_id');
            $table->string('student_id');
            $table->string('holds');
            $table->string('department');
            $table->dropColumn(['hold_id', 'user_id']);
        });

        DB::statement('ALTER TABLE student_holds ALTER COLUMN placed_by TYPE character varying USING (placed_by)::character varying');
    }
};
