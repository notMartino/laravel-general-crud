<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    return [
        'team1' => $faker -> firstName,
        'team2' => $faker -> lastName,
        'point1' => $faker -> randomDigit,
        'point2' => $faker -> randomDigit,
        'result' => rand(0,1) == 0
    ];
});
