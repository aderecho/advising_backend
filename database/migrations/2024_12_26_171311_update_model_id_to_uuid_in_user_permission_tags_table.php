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
        Schema::table('user_permission_tags', function (Blueprint $table) {
            $table->uuid('model_uuid')->nullable();
            $table->integer('model_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_permission_tags', function (Blueprint $table) {
            $table->dropColumn('model_uuid');
            $table->integer('model_id')->nullable(false)->change();
        });
    }
};
