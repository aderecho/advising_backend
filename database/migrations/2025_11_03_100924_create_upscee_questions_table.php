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
        Schema::create('upscee_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_text', 255);
            $table->enum('question_type', [
                'multiple_choice',
                'short_answer',
                'boolean',
                'likert',
                'essay'
            ]);
            $table->json('options')->nullable();
            $table->boolean('is_active')->default(true);
            $table->integer('order')->nullable();
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
        Schema::dropIfExists('upscee_questions');
    }
};
