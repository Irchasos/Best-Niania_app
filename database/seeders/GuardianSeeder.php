<?php

namespace Database\Seeders;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table("guardians")->insert([
            "name" => $faker->name(),
            "email" => $faker->email(),
            "description" => $faker->text(),
            "years_of_work" => $faker->randomDigit,
            "phone_number" => $faker->phoneNumber(),
            "rank" => $faker->randomDigit,
            "degree" => $faker->word,
            "src" => $faker->word,


        ]);
    }
}

