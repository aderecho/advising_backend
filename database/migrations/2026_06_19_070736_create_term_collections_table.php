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
        Schema::create('term_collections', function (Blueprint $table) {
            $table->unsignedBigInteger('term_collections_id')->unique();;
            $table->unsignedBigInteger('term_id');
            $table->unsignedBigInteger('curriculum_id');
            $table->string('year_level')->nullable();
            $table->string('term_description')->nullable();
            $table->string('term_ay')->nullable();
            $table->timestamps();

            $table->primary(['term_collections_id','term_id']);
            $table->foreign('term_id')->references('term_id')->on('terms');
            $table->foreign('curriculum_id')->references('curriculum_id')->on('curriculums');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('term_collections');
    }
};
