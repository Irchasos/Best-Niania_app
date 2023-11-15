<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('options')->insert(
            array(
                'id'     =>   '1',
                'name'   =>   'Hour_price'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '2',
                'name'   =>   'Animals'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '3',
                'name'   =>   'MultiCare'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '4',
                'name'   =>   'Teaching'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '5',
                'name'   =>   'PlayMaster'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '6',
                'name'   =>   'EventCare'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '7',
                'name'   =>   'Invalid'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '8',
                'name'   =>   'Kitchen Chef'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '9',
                'name'   =>   'experience'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '10',
                'name'   =>   'Night_shift'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '11',
                'name'   =>   'Woman'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '12',
                'name'   =>   'Man'
            )
        );

        DB::table('options')->insert(
            array(
                'id'     =>   '13',
                'name'   =>   'Troubled_kids'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '14',
                'name'   =>   'English'
            )
        );
        DB::table('options')->insert(
            array(
                'id'     =>   '15',
                'name'   =>   'Psychological_Helper'
            )
        );
    }
}
