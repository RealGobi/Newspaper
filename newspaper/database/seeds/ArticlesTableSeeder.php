<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'category' => str_random(10),
            'rank' => rand(1,5),
            'headline' => str_random(10),
            'text' => str_random(800),
            'img' => str_random(128),
            'free' => rand(0,1)

        ]);

    }
}
