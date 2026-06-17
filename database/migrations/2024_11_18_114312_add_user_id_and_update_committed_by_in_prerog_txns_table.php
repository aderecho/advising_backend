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
        Schema::table('prerog_txns', function (Blueprint $table) {
            $table->uuid('user_id')->nullable();
            $table->integer('committed_by')->nullable()->change();
        });

        DB::statement('UPDATE prerog_txns SET user_id = users.id FROM users WHERE prerog_txns.committed_by = users.sais_id');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prerog_txns', function (Blueprint $table) {
            $table->dropColumn(['user_id']);
            $table->integer('committed_by')->nullable(false)->change();
        });
    }
};
