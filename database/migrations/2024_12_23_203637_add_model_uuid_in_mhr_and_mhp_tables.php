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
        Schema::table('model_has_permissions', function (Blueprint $table) {
            $table->dropPrimary();
            $table->dropIndex('model_has_permissions_model_id_model_type_index');
            $table->uuid('model_uuid')->nullable();
        });

        Schema::table('model_has_permissions', function (Blueprint $table) {
            $table->bigInteger('model_id')->nullable()->change();
        });

        DB::statement('UPDATE model_has_permissions SET model_uuid = users.id FROM users WHERE model_has_permissions.model_id = users.sais_id');

        // DB::raw('update model_has_permissions set model_uuid = users.id 
        //     from users where users.sais_id = model_has_permissions.model_id');

        // Schema::table('model_has_permissions', function (Blueprint $table) {
        //     $table->primary(['permission_id', 'model_uuid', 'model_type'], 'model_has_permissions_pkey');
        //     $table->index(['model_uuid', 'model_type'], 'model_has_permissions_model_uuid_model_type_index');
        // });

        Schema::table('model_has_roles', function (Blueprint $table) {
            $table->dropPrimary();
            $table->dropIndex('model_has_roles_model_id_model_type_index');
            $table->uuid('model_uuid')->nullable();
        });

        Schema::table('model_has_roles', function (Blueprint $table) {
            $table->bigInteger('model_id')->nullable()->change();
        });

        DB::statement('UPDATE model_has_roles SET model_uuid = users.id FROM users WHERE model_has_roles.model_id = users.sais_id');

        // DB::raw('update model_has_roles set model_uuid = users.id 
        //     from users where users.sais_id = model_has_roles.model_id');

        // Schema::table('model_has_roles', function (Blueprint $table) {
        //     $table->primary(['role_id', 'model_uuid', 'model_type'], 'model_has_roles_pkey');
        //     $table->index(['model_uuid', 'model_type'], 'model_has_roles_model_uuid_model_type_index');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('model_has_permissions', function (Blueprint $table) {
            // $table->dropPrimary('model_has_permissions_pkey');
            // $table->dropIndex('model_has_permissions_model_id_model_type_index');
            
            $table->dropColumn('model_uuid');
            $table->bigInteger('model_id')->nullable(false)->change();

            $table->primary(['permission_id', 'model_type', 'model_id'], 'model_has_permissions_pkey');
            $table->index(['model_id', 'model_type'], 'model_has_permissions_model_id_model_type_index');
        });

        Schema::table('model_has_roles', function (Blueprint $table) {
            // $table->dropPrimary('model_has_roles_pkey');
            // $table->dropIndex('model_has_roles_model_id_model_type_index');
            
            $table->dropColumn('model_uuid');
            $table->bigInteger('model_id')->nullable(false)->change();

            $table->primary(['role_id', 'model_type', 'model_id'], 'model_has_roles_pkey');
            $table->index(['model_id', 'model_type'], 'model_has_roles_model_id_model_type_index');
        });
    }
};
