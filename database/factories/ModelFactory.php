<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});



// category
$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word,
    ];
});

// posts

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {

    return [
        'title' => $faker->word,
        'body' => $faker->sentence,
        'is_published' => $faker->boolean,
        'order' => $faker->numberBetween(0,55),
        'category_id' => $faker->numberBetween(11,38),
        'user_id' => $faker->numberBetween(11,38),

    ];


});
