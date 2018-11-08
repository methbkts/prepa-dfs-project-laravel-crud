<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('actors')->insert([
            [
                'first_name' => 'Jean Mi',
                'last_name' => 'Lulz',
            ],
            [
                'first_name' => 'Pierre',
                'last_name' => 'Poljak',
            ],
            [
                "first_name" => "Evan",
                "last_name" => "Peters"
            ],
            [
                "first_name" => "Lucy",
                "last_name" => "Liu"
            ],
            [
                "first_name" => "Emma",
                "last_name" => "Stone"
            ],
            [
                "first_name" => "Mads",
                "last_name" => "Mikkelsen"
            ],
            [
                "first_name" => "Rami",
                "last_name" => "Malek"
            ],
        ]);
    }
}
