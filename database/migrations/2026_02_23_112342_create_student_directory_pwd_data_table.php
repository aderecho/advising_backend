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
        Schema::create('student_directory_pwd_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_directory_id');
            $table->boolean('is_pwd')->default(false);
            $table->string('pwd_id_number')->nullable();
            $table->enum('pwd_type', ['visual', 'hearing', 'mobility', 'cognitive', 'other'])->nullable();
            $table->text('special_needs_details')->nullable();
            $table->timestamps();

            $table->foreign('student_directory_id')
                ->references('id')
                ->on('student_directory')
                ->onDelete('cascade');
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
        Schema::dropIfExists('student_directory_pwd_data');
    }
};
