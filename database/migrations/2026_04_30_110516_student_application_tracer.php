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
        //
        // Schema::create('student_application_tracers', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('student_id');
        //     $table->string('token')->unique();
        //     $table->string('application_status')->default('pending');
        //     $table->timestamps();

        //     // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
        // });


        Schema::create('student_application_tracers', function (Blueprint $table) {
            $table->id();

            // Student info
            $table->unsignedBigInteger('student_id')->nullable()->index();
            $table->string('campus_id')->nullable()->index();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('suffix')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('student_email')->index();

            // Email / unique access key
            $table->string('email_unique_key')->unique();
            $table->timestamp('key_expires_at')->nullable();
            $table->timestamp('key_used_at')->nullable();

            // Application tracking
            $table->string('reference_no')->unique();
            $table->string('application_type')->nullable(); 
            $table->enum('status', [
                'email_sent',
                'opened',
                'submitted',
                'received',
                'processing',
                'approved',
                'rejected',
                'completed'
            ])->default('email_sent')->index();

            // Email details
            $table->string('email_subject')->nullable();
            $table->timestamp('email_sent_at')->nullable();
            $table->timestamp('email_opened_at')->nullable();

            // Application dates
            $table->timestamp('submitted_at')->nullable();
            $table->timestamp('processed_at')->nullable();
            $table->timestamp('completed_at')->nullable();

            // Notes / audit
            $table->text('remarks')->nullable();
            $table->uuid('created')->nullable();
            $table->uuid('updated')->nullable();

            $table->foreign('created')->references('id')->on('users')->nullOnDelete();
            $table->foreign('updated')->references('id')->on('users')->nullOnDelete();


            // $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            // $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('student_application_tracers');
    }
};
