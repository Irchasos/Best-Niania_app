<?php

namespace Database\Seeders;


use App\Models\District;
use App\Models\DistrictGuardian;
use App\Models\Guardian;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
       // District::factory(15)->create();
        Guardian::factory(100)->create();
       // DistrictGuardian::factory(10)->create();

    }
}
