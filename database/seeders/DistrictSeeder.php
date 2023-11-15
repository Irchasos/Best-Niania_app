<?php

namespace Database\Seeders;
use App\Models\District;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        DB::table('districts')->insert(
            array(
                'id'     =>   '1',
                'name'   =>   'Białołęka'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '2',
                'name'   =>   'Bielany'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '3',
                'name'   =>   'Bemowo'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '4',
                'name'   =>   'Targówek'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '5',
                'name'   =>   'Żoliborz'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '6',
                'name'   =>   'Wola'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '7',
                'name'   =>   'Praga-Północ'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '8',
                'name'   =>   'Praga-Południe'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '9',
                'name'   =>   'Rembertów'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '10',
                'name'   =>   'Ursus'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '11',
                'name'   =>   'Śródmiecie'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '12',
                'name'   =>   'Mokotów'
            )
        );

        DB::table('districts')->insert(
            array(
                'id'     =>   '13',
                'name'   =>   'Włochy'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '14',
                'name'   =>   'Ochota'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '15',
                'name'   =>   'Ursynów'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '16',
                'name'   =>   'Wilanów'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '17',
                'name'   =>   'Wawer'
            )
        );
        DB::table('districts')->insert(
            array(
                'id'     =>   '18',
                'name'   =>   'Wesoła'
            )
        );
    }
}
