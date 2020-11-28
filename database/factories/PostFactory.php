<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    $title = $faker->paragraph($nbSentences = 3, $VariableNbSentences = true);
    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'content' => $faker->text($maxNbChars = 200)
    ];
});
