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
            $table->integer('prerog_count')->nullable()->after('active_class_size');
            $table->integer('reserved_count')->nullable()->after('prerog_count');
            $table->boolean('is_active')->nullable()->after('reserved_count');
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
            $table->dropColumn(['prerog_count', 'reserved_count', 'is_active']);
        });
    }
};
