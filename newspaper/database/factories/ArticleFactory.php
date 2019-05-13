<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Article;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Article::class, function (Faker $faker) {
    return [
        'rank' => $faker->numberBetween($min = 1, $max = 5),
        'headline' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'text' => $faker->paragraph($nbSentences = 9, $variableNbSentences = true),
        'free' => $faker->numberBetween($min = 0, $max = 1),
        'category' => $faker->randomElement($array = array ('Quidditch', 'Lightsaber fencing', 
        'Dejarik', 'Dragon Dressage', 'Fot-Boule', 'Sewer Surfin', 'Anbo-Jitsu', 'Blernsball'))
    ]; 
});
