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
        Schema::table('enlistment_requests', function (Blueprint $table) {
            $table->string('student_number', 10)->nullable();
            $table->integer('sais_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('enlistment_requests', function (Blueprint $table) {
            $table->dropColumn(['student_number']);
            $table->integer('sais_id')->nullable(false)->change();
        });
    }
};
