<?php

namespace Database\Factories;

use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class GuardianFactory extends Factory

{    protected $model = Guardian::class;


    public function definition()
    {
        return [
            "name" => $this->faker->name(),
            "email" => $this->faker->email(),
            "description" =>$this-> faker->text(),
            "years_of_work" =>$this-> faker->randomDigit(),
            "phone_number" =>$this-> faker->randomDigit(),
            "rank" =>$this-> faker->randomDigit(),
            "degree" =>$this-> faker->word,
            "src" =>$this-> faker->word,
        ];
    }
}
