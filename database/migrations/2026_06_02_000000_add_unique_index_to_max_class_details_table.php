<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('max_class_details', function (Blueprint $table) {
            $table->unique(['class_id', 'program_id'], 'max_class_details_class_program_unique');
        });
    }

    public function down(): void
    {
        Schema::table('max_class_details', function (Blueprint $table) {
            $table->dropUnique('max_class_details_class_program_unique');
        });
    }
};
