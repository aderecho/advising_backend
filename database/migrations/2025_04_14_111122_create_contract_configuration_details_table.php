<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract_configuration_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('contract_configuration_id');
            $table->string('coverage_type')->nullable();
            $table->string('particulars')->nullable();
            $table->double('value')->nullable();
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
        Schema::dropIfExists('contract_configuration_details');
    }
};
