<?php

use App\Signature;
use Faker\Generator as Faker;

$factory->define(Signature::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'body' => $faker->sentence,
    ];
});