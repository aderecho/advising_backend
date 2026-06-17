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
        // DB::statement('ALTER TABLE personal_access_tokens ALTER COLUMN tokenable_id TYPE character varying USING (tokenable_id)::character varying');
        // DB::statement('ALTER TABLE personal_access_tokens ALTER COLUMN tokenable_id TYPE UUID USING (tokenable_id)::UUID');

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->uuid('temp_tokenable_id')->nullable();
        });

        DB::statement('UPDATE personal_access_tokens SET temp_tokenable_id = users.id FROM users WHERE personal_access_tokens.tokenable_id = users.sais_id');

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->dropIndex('personal_access_tokens_tokenable_type_tokenable_id_index');
        });

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->renameColumn('tokenable_id', 'tokenable_id_backup');
        });

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->renameColumn('temp_tokenable_id', 'tokenable_id');
        });

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->index(['tokenable_type', 'tokenable_id'], 'personal_access_tokens_tokenable_type_tokenable_id_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // DB::statement('ALTER TABLE personal_access_tokens ALTER COLUMN tokenable_id TYPE character varying USING (tokenable_id)::character varying');
        // DB::statement('ALTER TABLE personal_access_tokens ALTER COLUMN tokenable_id TYPE bigint USING (tokenable_id)::bigint');
        
        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->dropIndex('personal_access_tokens_tokenable_type_tokenable_id_index');
        });

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->renameColumn('tokenable_id', 'temp_tokenable_id');
        });

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->renameColumn('tokenable_id_backup', 'tokenable_id');
        });

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->index(['tokenable_type', 'tokenable_id'], 'personal_access_tokens_tokenable_type_tokenable_id_index');
        });

        Schema::table('personal_access_tokens', function (Blueprint $table) {
            $table->dropColumn('temp_tokenable_id');
        });
    }
};
