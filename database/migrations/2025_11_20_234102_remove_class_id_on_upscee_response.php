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
        Schema::table('upscee_response', function (Blueprint $table) {
            if (Schema::hasColumn('upscee_response', 'class_id')) {
                $table->dropColumn('class_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upscee_response', function (Blueprint $table) {
            $table->string('class_id')->nullable();
        });
    }
};
