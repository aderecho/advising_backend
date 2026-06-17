<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('max_class_details', function (Blueprint $table) {
            // Primary Key (bigserial)
            $table->bigIncrements('id');

            // Columns
            $table->unsignedBigInteger('class_id');
            $table->integer('size');
            $table->unsignedBigInteger('program_id');

            // Foreign Keys
            $table->foreign('class_id')
                ->references('id')
                ->on('classes')
                ->onDelete('cascade');

            $table->foreign('program_id')
                ->references('student_program_record_id')
                ->on('student_program_records')
                ->onDelete('cascade');

            // Indexes
            $table->index('class_id');
            $table->index('program_id');
            $table->index(['class_id', 'program_id']); // composite index

            // Optional timestamps
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('max_class_details');
    }
};
