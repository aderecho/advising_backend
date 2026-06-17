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
        Schema::table('number_of_required_mentors', function (Blueprint $table) {
            $table->boolean('is_pcw_approver')->default(false)->after('min');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('number_of_required_mentors', function (Blueprint $table) {
            $table->dropColumn(['is_pcw_approver']);
        });
    }
};
