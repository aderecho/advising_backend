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
        Schema::table('fee_configs', function (Blueprint $table) {
            $table->string('responsibility_center');
        });

        Schema::table('fee_tags', function (Blueprint $table) {
            $table->renameColumn('id', 'tag_id');
        });

        Schema::table('responsibility_center', function (Blueprint $table) {
            $table->string('responsibility_center')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fee_configs', function (Blueprint $table) {
            $table->dropColumn('responsibility_center');
        });

        Schema::table('fee_tags', function (Blueprint $table) {
            $table->renameColumn('tag_id', 'id');
        });

        Schema::table('responsibility_center', function (Blueprint $table) {
            $table->integer('responsibility_center')->nullable()->change();
        });
    }
};
