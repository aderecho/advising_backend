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
        Schema::create('permission_access', function (Blueprint $table) {
            $table->id();
            $table->uuid('user_id');
            $table->integer('permission_id');
            $table->boolean('view')->default(false);
            $table->boolean('add')->default(false);
            $table->boolean('edit')->default(false);
            $table->boolean('delete')->default(false);
            $table->boolean('import')->default(false);
            $table->boolean('export')->default(false);
            $table->boolean('approve')->default(false);
            $table->boolean('all')->default(false);
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
        Schema::dropIfExists('permission_access');
    }
};
