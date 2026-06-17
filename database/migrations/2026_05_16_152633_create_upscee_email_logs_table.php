<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('upscee_email_logs', function (Blueprint $table) {
            $table->id();

            $table->string('campus_id')->nullable();
            $table->unsignedBigInteger('term_id')->nullable();
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('course_id')->nullable();

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();

            $table->string('email');
            $table->string('course_code')->nullable();
            $table->string('section')->nullable();
            $table->string('term_name')->nullable();

            $table->string('subject')->default('UP Cebu Assessment Reminder');
            $table->string('assessment_link')->nullable();

            $table->enum('status', ['pending', 'sent', 'failed'])->default('pending');

            $table->timestamp('sent_at')->nullable();
            $table->timestamp('failed_at')->nullable();

            $table->text('error_message')->nullable();

            $table->json('payload')->nullable();

            $table->timestamps();

            $table->index(['campus_id', 'term_id']);
            $table->index(['email']);
            $table->index(['status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('upscee_email_logs');
    }
};