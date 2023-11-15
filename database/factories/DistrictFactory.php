<?php

namespace Database\Factories;

use App\Models\District;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictFactory extends Factory
{    protected $model = District::class;


    public function definition()
    {
        return [
            array('id' => 1,'name' => 'Dayle'),

        ];
    }
}
