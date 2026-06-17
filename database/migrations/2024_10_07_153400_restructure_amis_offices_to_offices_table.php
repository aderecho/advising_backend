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
        Schema::rename('amis_offices', 'offices');

        Schema::table('offices', function (Blueprint $table) {
            $table->renameColumn('abbrev', 'acronym');
            $table->integer('parent_office_id')->nullable();
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::rename('offices', 'amis_offices');

        Schema::table('offices', function (Blueprint $table) {
            $table->renameColumn('acronym', 'abbrev');
            $table->dropColumn(['parent_office_id', 'type']);
        });
    }
};
