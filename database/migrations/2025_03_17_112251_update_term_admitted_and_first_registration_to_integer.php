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
    // Replace empty strings with NULL before conversion
    DB::statement("UPDATE student_program_records SET term_admitted = NULL WHERE term_admitted = '';");
    DB::statement("UPDATE student_program_records SET first_registration = NULL WHERE first_registration = '';");

    // Convert existing values to integer before changing column type
    DB::statement("
            UPDATE student_program_records spr
            SET term_admitted = st.term_id
            FROM student_terms st
            WHERE spr.term_admitted = st.term || ' - ' || st.ay;
        ");

    DB::statement("
            UPDATE student_program_records spr
            SET first_registration = st.term_id
            FROM student_terms st
            WHERE spr.first_registration = st.term || ' - ' || st.ay;
        ");

    // Alter column type using explicit conversion
    DB::statement("ALTER TABLE student_program_records ALTER COLUMN term_admitted TYPE INT USING NULLIF(term_admitted, '')::INTEGER;");
    DB::statement("ALTER TABLE student_program_records ALTER COLUMN first_registration TYPE INT USING NULLIF(first_registration, '')::INTEGER;");
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    // Convert back to string (optional)
    DB::statement("ALTER TABLE student_program_records ALTER COLUMN term_admitted TYPE VARCHAR(50);");
    DB::statement("ALTER TABLE student_program_records ALTER COLUMN first_registration TYPE VARCHAR(50);");
  }
};
