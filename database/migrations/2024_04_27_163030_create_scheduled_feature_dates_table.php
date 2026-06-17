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
        Schema::create('scheduled_feature_dates', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('scheduled_feature_id');
            $table->string('description');
            $table->dateTime('start_datetime');
            $table->dateTime('end_datetime');
            $table->string('content');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scheduled_feature_dates');
    }
};
