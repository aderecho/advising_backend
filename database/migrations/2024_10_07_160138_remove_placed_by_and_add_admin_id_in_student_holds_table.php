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
        Schema::table('student_holds', function (Blueprint $table) {
            $table->dropColumn('placed_by');
            $table->integer('admin_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_holds', function (Blueprint $table) {
            $table->dropColumn('admin_id');
            $table->uuid('placed_by');
        });
    }
};
