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
        DB::table('student_enlistments')
            ->where('term_id', 1242)
            ->where('status', 'Bookmarked')
            ->update(['status' => 'Pending']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('student_enlistments')
            ->where('term_id', 1242)
            ->where('status', 'Pending')
            ->update(['status' => 'Bookmarked']);
    }
};
