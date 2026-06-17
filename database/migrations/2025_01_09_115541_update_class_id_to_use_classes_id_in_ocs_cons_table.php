<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        //create a holder for the real class id
        Schema::table('ocs_consent', function (Blueprint $table) {
            $table->bigInteger('temp_class_id')->nullable();
        });

        //populate it based from the ocs_consent data x classes
        DB::statement('UPDATE ocs_consent SET temp_class_id = classes.id FROM classes where ocs_consent.class_id = classes.class_nbr and ocs_consent.term = classes.term_id');

        Schema::table('ocs_consent', function (Blueprint $table) {
            $table->renameColumn('class_id', 'class_nbr_backup');
        });

        Schema::table('ocs_consent', function (Blueprint $table) {
            $table->renameColumn('temp_class_id', 'class_id');
        });

        Schema::table('ocs_consent', function (Blueprint $table) {
            $table->integer('class_nbr_backup')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ocs_consent', function (Blueprint $table) {
            $table->renameColumn('class_id', 'temp_class_id');
        });

        Schema::table('ocs_consent', function (Blueprint $table) {
            $table->renameColumn('class_nbr_backup', 'class_id');
        });

        Schema::table('ocs_consent', function (Blueprint $table) {
            $table->dropColumn('temp_class_id');
            $table->integer('class_nbr_backup')->nullable(false)->change();
        });
    }
};
