<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('email_send_logs', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('campus_id')->nullable();
            $table->unsignedBigInteger('term_id')->nullable();

            $table->string('email');
            $table->string('student_name')->nullable();

            $table->string('email_type')->default('assessment_reminder');
            $table->string('status')->default('pending'); // pending, sent, failed

            $table->integer('days_remaining')->nullable();
            $table->text('assessment_link')->nullable();

            $table->text('error_message')->nullable();
            $table->json('payload')->nullable();
            $table->timestamp('sent_at')->nullable();

            $table->timestamps();

            $table->index('user_id');
            $table->index('term_id');
            $table->index('email');
            $table->index('status');
            $table->index('email_type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('email_send_logs');
    }
};