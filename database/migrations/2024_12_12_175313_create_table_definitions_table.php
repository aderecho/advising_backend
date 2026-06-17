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
    Schema::create('table_definitions', function (Blueprint $table) {
      $table->id();
      $table->string('tables'); // To store the table name
      $table->string('fields'); // To store the field name
      $table->string('type'); // To store the type of field
      $table->string('index_type')->nullable(); // Nullable index type (e.g., unique, primary)
      $table->text('description')->nullable(); // Description of the field
      $table->string('relationship')->nullable(); // Store relationship type (e.g., one-to-many)
      $table->timestamps(); // Created at and updated at timestamps
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('table_definitions');
  }
};
