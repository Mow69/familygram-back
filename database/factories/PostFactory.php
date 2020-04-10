<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use App\Categorie;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        "media" => "https://picsum.photos/400/300?a=" . rand(0, 50),
        "description" => $faker->text,
        "user_id" => User::all(["id"])->random(),
        "categorie_id" => Categorie::all(["id"])->random(),
    ];
});
