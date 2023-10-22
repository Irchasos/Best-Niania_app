<?php

namespace Database\Seeders;
use App\Models\District;
use App\Models\Guardian;
use Database\Factories\DistrictFactory;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Pivot_District_Guardian_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        DB::table("district_guardians")->insert([
            'district_id' => District::all()->random()->id,
            'guardian_id' => Guardian::all()->random()->id,


        ]);
    }
}
