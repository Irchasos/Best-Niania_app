<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddGuardianOptionsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('guardian_options')->insert([
            ['guardian_id' => 2, 'option_id' => 1],
            ['guardian_id' => 2, 'option_id' => 2],
            ['guardian_id' => 2, 'option_id' => 5],
            ['guardian_id' => 2, 'option_id' => 6],
            ['guardian_id' => 2, 'option_id' => 8],
            ['guardian_id' => 2, 'option_id' => 9],
            ['guardian_id' => 2, 'option_id' => 10],

            ['guardian_id' => 3, 'option_id' => 1],
            ['guardian_id' => 3, 'option_id' => 2],
            ['guardian_id' => 3, 'option_id' => 4],
            ['guardian_id' => 3, 'option_id' => 7],
            ['guardian_id' => 3, 'option_id' => 8],
            ['guardian_id' => 3, 'option_id' => 9],
            ['guardian_id' => 3, 'option_id' => 10],

            ['guardian_id' => 4, 'option_id' => 3],
            ['guardian_id' => 4, 'option_id' => 5],
            ['guardian_id' => 4, 'option_id' => 6],
            ['guardian_id' => 4, 'option_id' => 7],
            ['guardian_id' => 4, 'option_id' => 9],
            ['guardian_id' => 4, 'option_id' => 11],
            ['guardian_id' => 4, 'option_id' => 14],

            ['guardian_id' => 5, 'option_id' => 2],
            ['guardian_id' => 5, 'option_id' => 4],
            ['guardian_id' => 5, 'option_id' => 5],
            ['guardian_id' => 5, 'option_id' => 6],
            ['guardian_id' => 5, 'option_id' => 10],
            ['guardian_id' => 5, 'option_id' => 12],
            ['guardian_id' => 5, 'option_id' => 15],

            ['guardian_id' => 6, 'option_id' => 1],
            ['guardian_id' => 6, 'option_id' => 3],
            ['guardian_id' => 6, 'option_id' => 5],
            ['guardian_id' => 6, 'option_id' => 7],
            ['guardian_id' => 6, 'option_id' => 8],
            ['guardian_id' => 6, 'option_id' => 9],
            ['guardian_id' => 6, 'option_id' => 10],

            ['guardian_id' => 7, 'option_id' => 1],
            ['guardian_id' => 7, 'option_id' => 2],
            ['guardian_id' => 7, 'option_id' => 3],
            ['guardian_id' => 7, 'option_id' => 4],
            ['guardian_id' => 7, 'option_id' => 6],
            ['guardian_id' => 7, 'option_id' => 12],
            ['guardian_id' => 7, 'option_id' => 13],

            ['guardian_id' => 8, 'option_id' => 2],
            ['guardian_id' => 8, 'option_id' => 3],
            ['guardian_id' => 8, 'option_id' => 4],
            ['guardian_id' => 8, 'option_id' => 7],
            ['guardian_id' => 8, 'option_id' => 9],
            ['guardian_id' => 8, 'option_id' => 12],
            ['guardian_id' => 8, 'option_id' => 14],

            ['guardian_id' => 9, 'option_id' => 3],
            ['guardian_id' => 9, 'option_id' => 5],
            ['guardian_id' => 9, 'option_id' => 7],
            ['guardian_id' => 9, 'option_id' => 8],
            ['guardian_id' => 9, 'option_id' => 10],
            ['guardian_id' => 9, 'option_id' => 12],
            ['guardian_id' => 9, 'option_id' => 15],

            ['guardian_id' => 10, 'option_id' => 2],
            ['guardian_id' => 10, 'option_id' => 5],
            ['guardian_id' => 10, 'option_id' => 6],
            ['guardian_id' => 10, 'option_id' => 8],
            ['guardian_id' => 10, 'option_id' => 10],
            ['guardian_id' => 10, 'option_id' => 11],
            ['guardian_id' => 10, 'option_id' => 13],

            ['guardian_id' => 11, 'option_id' => 1],
            ['guardian_id' => 11, 'option_id' => 3],
            ['guardian_id' => 11, 'option_id' => 5],
            ['guardian_id' => 11, 'option_id' => 7],
            ['guardian_id' => 11, 'option_id' => 9],
            ['guardian_id' => 11, 'option_id' => 10],
            ['guardian_id' => 11, 'option_id' => 14]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('guardian_options')->whereIn('guardian_id', [2, 3, 4, 5, 6, 7, 8, 9, 10, 11])->delete();
    }
}
