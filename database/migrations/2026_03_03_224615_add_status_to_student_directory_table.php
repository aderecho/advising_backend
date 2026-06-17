<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('student_directory', function (Blueprint $table) {
            $table->string('status')
                ->default('ACTIVE')
                ->after('user_id'); // adjust position if needed

            $table->index('status'); // optional but recommended
        });
    }

    public function down()
    {
        Schema::table('student_directory', function (Blueprint $table) {
            $table->dropIndex(['status']);
            $table->dropColumn('status');
        });
    }
};
