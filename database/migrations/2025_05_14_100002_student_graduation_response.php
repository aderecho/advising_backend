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
        Schema::create('student_graduation_response', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('student_graduation_id');
            $table->string('agree')->nullable();
            $table->string('altEmail')->nullable();
            $table->string('alumniConsent')->nullable();
            $table->string('arts_graduate')->nullable();
            $table->string('barangay')->nullable();
            $table->string('birthDate')->nullable();
            $table->string('birthPlace')->nullable();
            $table->string('college_obtained')->nullable();
            $table->string('commencementConsent')->nullable();
            $table->string('confirmation')->nullable();
            $table->string('consent')->nullable();
            $table->string('country')->nullable();
            $table->string('date_obtained')->nullable();
            $table->string('degreeOption')->nullable();
            $table->string('familyName')->nullable();
            $table->string('fileName')->nullable();
            $table->string('firstName')->nullable();
            $table->longText('foreignStreetAddress')->nullable();
            $table->longText('foreignStreetAddress2')->nullable();
            $table->string('honorsRequirements')->nullable();
            $table->longText('imageBase64')->nullable();
            $table->boolean('isForeignStudent')->default(false);
            $table->boolean('isPermanentAddress')->default(false);
            $table->string('landlineNumber')->nullable();
            $table->string('live_familyName')->nullable();
            $table->string('live_firstName')->nullable();
            $table->string('live_middleName')->nullable();
            $table->string('live_suffix')->nullable();
            $table->string('marital_date')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('middleName')->nullable();
            $table->string('mobileNumber')->nullable();
            $table->string('nso_name')->nullable();
            $table->string('prev_title_degree')->nullable();
            $table->string('selectedCity')->nullable();
            $table->string('selectedProvince')->nullable();
            $table->string('selectedTerm')->nullable();
            $table->string('sex')->nullable();
            $table->longText('sigImage')->nullable();
            $table->longText('streetAddress')->nullable();
            $table->string('suffix')->nullable();
            $table->string('upemail')->nullable();
            $table->string('zip')->nullable();
            $table->foreign('student_graduation_id')
            ->references('id')
            ->on('student_graduation')
            ->onDelete('cascade');

            $table->timestamps(); // optional
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_graduation_response');
    }
};
