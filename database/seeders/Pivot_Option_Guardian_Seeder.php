<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Guardian;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Pivot_Option_Guardian_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { $faker = \Faker\Factory::create();
        DB::table("guardian_options")->insert([
            'option_id' => Option::all()->random()->id,
            'guardian_id' => Guardian::all()->random()->id,


        ]);
    }
}
