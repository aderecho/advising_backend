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
        Schema::table('approved_specializations', function (Blueprint $table) {
            $table->integer('field_id')->after('curriculum_id')->nullable();
            $table->text('field_type')->before('field_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('approved_specializations', function (Blueprint $table) {
            //
        });
    }
};
