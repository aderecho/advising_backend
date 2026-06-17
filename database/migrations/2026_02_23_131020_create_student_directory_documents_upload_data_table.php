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
        Schema::create('student_directory_documents_upload_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_directory_id');
            $table->enum('document_upload_type', [
                'TOR',
                'HD',
                'PSA BC',
                'LCR',
                'GMC',
                'Medical Certificate',
                'Photo',
                'Notice of Admission',
                'Form 138 (HD if transferre)',
                'JHS and SHS Form 137 (GTC-TOR if transferre)',
                'Photocopy of Married Certificate (if married)',
                'other'
            ])->nullable();
            $table->string('document_upload_group')->nullable();
            $table->string('document_upload_group_other')->nullable();
            $table->timestamps();

            $table->foreign('student_directory_id')->references('id')->on('student_directory')->onDelete('cascade');
            $table->index('student_directory_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_directory_documents_upload_data');
    }
};
