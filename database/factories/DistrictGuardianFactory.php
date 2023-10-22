<?php
namespace Database\Factories;
use App\Models\District;
use App\Models\DistrictGuardian;


use App\Models\Guardian;
use Illuminate\Database\Eloquent\Factories\Factory;

class DistrictGuardianFactory extends Factory
{
    protected $model = DistrictGuardian::class;


    public function definition()
    {
        return [
            'district_id' => District::all()->random()->id,
            'guardian_id' => Guardian::all()->random()->id,

        ];


    }}



