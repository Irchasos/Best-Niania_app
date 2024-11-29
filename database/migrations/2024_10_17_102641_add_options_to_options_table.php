<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class AddOptionsToOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Dodanie cech do tabeli options
        DB::table('options')->insert([
            ['name' => 'Cena za godzinę stała przez całą dobę'],
            ['name' => 'Opieka nad zwierzętami'],
            ['name' => 'Opieka nad większą ilością osób'],
            ['name' => 'Wsparcie w nauce'],
            ['name' => 'Organizowanie zabawy'],
            ['name' => 'Wychowawca kolonijny'],
            ['name' => 'Opieka nad niepełnosprawnymi'],
            ['name' => 'Kucharz'],
            ['name' => 'Wieloletnie doświadczenie'],
            ['name' => 'Opieka w nocy'],
            ['name' => 'Opiekunka'],
            ['name' => 'Opiekun'],
            ['name' => 'Trudna młodzież'],
            ['name' => 'Praca w języku angielskim'],
            ['name' => 'Wsparcie psychologiczne']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Opcjonalnie, jeśli chcesz usunąć te cechy podczas rollbacku migracji
        DB::table('options')->whereIn('name', [
            'Cena za godzinę stała przez całą dobę',
            'Opieka nad zwierzętami',
            'Opieka nad większą ilością osób',
            'Wsparcie w nauce',
            'Organizowanie zabawy',
            'Wychowawca kolonijny',
            'Opieka nad niepełnosprawnymi',
            'Kucharz',
            'Wieloletnie doświadczenie',
            'Opieka w nocy',
            'Opiekunka',
            'Opiekun',
            'Trudna młodzież',
            'Praca w języku angielskim',
            'Wsparcie psychologiczne'
        ])->delete();
    }
}
