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

    $mappings = [
      'Permanently Dismissed' => 'Permanently Disqualified',
      'Regular' => 'GS Regular Student',
      'Probationary Admission' => 'GS Probationary Admission',
    ];

    foreach ($mappings as $old => $new) {
      DB::table('scholastic_standings')
        ->where('standing', $old)
        ->update(['standing' => $new]);
    }
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    $mappings = [
      'Permanently Disqualified' => 'Permanently Dismissed',
      'GS Regular Student' => 'Regular',
      'GS Probationary Admission' => 'Probationary Admission',
    ];

    foreach ($mappings as $new => $old) {
      DB::table('scholastic_standings')
        ->where('standing', $new)
        ->update(['standing' => $old]);
    }
  }
};
