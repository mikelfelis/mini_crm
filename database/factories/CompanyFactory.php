<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Companies;
use Faker\Generator as Faker;

$factory->define(Companies::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'address' => $faker->address,
        'website' => $faker->domainName
    ];
});
