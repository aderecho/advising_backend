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
        Schema::create('student_graduation', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('campusId', 20)->nullable();
            $table->tinyInteger('status'); // 0 = pending, 1 = approved, 2 = denied

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
       Schema::dropIfExists('student_graduation');
    }
};
