<?php

namespace Database\Seeders;

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
        $guardians = [['name' => 'Mickey Mouse', 'email' => 'mickey@example.com', 'description' => 'Description for Mickey', 'years_of_work' => 5, 'ph' => '1234567890', 'degree' => 'Degree 1', 'votes' => 10, 'src' => 'image1.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'Donald Duck', 'email' => 'donald@example.com', 'description' => 'Description for Donald', 'years_of_work' => 3, 'ph' => '2345678901', 'degree' => 'Degree 2', 'votes' => 15, 'src' => 'image2.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'Elsa', 'email' => 'elsa@example.com', 'description' => 'Description for Elsa', 'years_of_work' => 7, 'ph' => '3456789012', 'degree' => 'Degree 3', 'votes' => 20, 'src' => 'image3.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'SpongeBob SquarePants', 'email' => 'spongebob@example.com', 'description' => 'Description for SpongeBob', 'years_of_work' => 2, 'ph' => '4567890123', 'degree' => 'Degree 4', 'votes' => 5, 'src' => 'image4.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'Batman', 'email' => 'batman@example.com', 'description' => 'Description for Batman', 'years_of_work' => 10, 'ph' => '5678901234', 'degree' => 'Degree 5', 'votes' => 50, 'src' => 'image5.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'Superman', 'email' => 'superman@example.com', 'description' => 'Description for Superman', 'years_of_work' => 8, 'ph' => '6789012345', 'degree' => 'Degree 6', 'votes' => 45, 'src' => 'image6.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'Wonder Woman', 'email' => 'wonderwoman@example.com', 'description' => 'Description for Wonder Woman', 'years_of_work' => 6, 'ph' => '7890123456', 'degree' => 'Degree 7', 'votes' => 40, 'src' => 'image7.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'Spiderman', 'email' => 'spiderman@example.com', 'description' => 'Description for Spiderman', 'years_of_work' => 5, 'ph' => '8901234567', 'degree' => 'Degree 8', 'votes' => 35, 'src' => 'image8.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'Iron Man', 'email' => 'ironman@example.com', 'description' => 'Description for Iron Man', 'years_of_work' => 9, 'ph' => '9012345678', 'degree' => 'Degree 9', 'votes' => 60, 'src' => 'image9.jpg', 'created_at' => now(), 'updated_at' => now()], ['name' => 'Hulk', 'email' => 'hulk@example.com', 'description' => 'Description for Hulk', 'years_of_work' => 7, 'ph' => '0123456789', 'degree' => 'Degree 10', 'votes' => 55, 'src' => 'image10.jpg', 'created_at' => now(), 'updated_at' => now()],];
        DB::table('guardians')->insert($guardians);
    }
}
