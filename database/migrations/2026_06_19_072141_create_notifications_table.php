<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
        $table->id('notification_id');
        $table->string('campus_id', 10);
        $table->string('title');
        $table->text('message')->nullable();
        $table->string('notification_type')->nullable();
        $table->string('status')->nullable();
        $table->timestamps();

        $table->foreign('campus_id')->references('campus_id')->on('students');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
