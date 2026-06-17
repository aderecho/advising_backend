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
        Schema::table('classes', function (Blueprint $table) {
            $table->string('consent')->nullable()->after('hide_faculty');
            $table->boolean('is_prerog_open')->nullable()->after('consent');
            $table->boolean('is_coi_open')->nullable()->after('is_prerog_open');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn(['consent', 'is_prerog', 'is_prerog_open', 'is_coi_open']);
        });
    }
};
