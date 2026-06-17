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
        Schema::table('loan_payments', function (Blueprint $table) {
            // Drop the old columns
            $table->dropColumn([
                'type',
                'soa',
                'billed_amount',
                'or_number',
                'student_loan_id',
                'amount_paid',
            ]);

            // Add the new columns
            $table->unsignedBigInteger('loan_billing_id');
            $table->string('transaction_number')->nullable();
            $table->double('principal')->nullable();
            $table->double('interest')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loan_payments', function (Blueprint $table) {
            // Re-add dropped columns
            $table->string('type')->nullable();
            $table->string('soa')->nullable();
            $table->double('billed_amount')->nullable();
            $table->string('or_number')->nullable();
            $table->unsignedBigInteger('student_loan_id');
            $table->double('amount_paid')->nullable();

            // Drop newly added columns
            $table->dropColumn([
                'loan_billing_id',
                'transaction_number',
                'principal',
                'interest',
            ]);
        });
    }
};
