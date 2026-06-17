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
        Schema::table('activity_log', function (Blueprint $table) {
            $table->uuid('temp_causer_id')->nullable();
        });

        DB::statement('UPDATE activity_log SET temp_causer_id = users.id FROM users WHERE activity_log.causer_id = users.sais_id');

        Schema::table('activity_log', function (Blueprint $table) {
            $table->dropIndex('causer');
        });

        Schema::table('activity_log', function (Blueprint $table) {
            $table->renameColumn('causer_id', 'causer_id_backup');
        });

        Schema::table('activity_log', function (Blueprint $table) {
            $table->renameColumn('temp_causer_id', 'causer_id');
        });

        Schema::table('activity_log', function (Blueprint $table) {
            $table->index(['causer_type', 'causer_id'], 'causer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('activity_log', function (Blueprint $table) {
            $table->dropIndex('causer');
        });

        Schema::table('activity_log', function (Blueprint $table) {
            $table->renameColumn('causer_id', 'temp_causer_id');
        });

        Schema::table('activity_log', function (Blueprint $table) {
            $table->renameColumn('causer_id_backup', 'causer_id');
        });

        Schema::table('activity_log', function (Blueprint $table) {
            $table->index(['causer_type', 'causer_id'], 'causer');
        });

        Schema::table('activity_log', function (Blueprint $table) {
            $table->dropColumn('temp_causer_id');
        });
    }
};
