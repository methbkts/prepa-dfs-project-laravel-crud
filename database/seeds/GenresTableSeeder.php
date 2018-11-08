<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'name' => 'Fantasy',
            ],
            [
                'name' => 'Action',
            ],
            [
                "name" => "Romantic",
            ],
            [
                "name" => "Horror",
            ],
            [
                "name" => "Sci fi",
            ],
            [
                "name" => "Post Apocalypse",
            ],
            [
                "name" => "Stempunk",
            ],
            [
                "name" => "Cyberpunk",
            ],
        ]);
    }
}
