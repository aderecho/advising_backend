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
        Schema::table('users', function (Blueprint $table) {
            $table->string('suffix')->nullable();
            $table->string('legal_name')->nullable();
            $table->string('civil_status')->nullable();
            $table->string('preferred_name')->nullable();
            $table->string('indigenous_group')->nullable();
            $table->string('religion')->nullable();
            $table->string('gender_identity')->nullable();
            $table->boolean('is_ncip_registered')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['suffix', 'legal_name', 'civil_status', 'preferred_name', 'indigenous_group', 'religion', 'gender_identity', 'is_ncip_registered']);
        });
    }
};
