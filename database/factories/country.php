<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Country;
use App\Continent;
use Faker\Generator as Faker;

$factory->define(Country::class, function (Faker $faker) {
    $fk = rand(1,5);
    return [
        //
        "country" => $faker->word,
        "con_id_fk" => Continent::all()->random()->id
    ];
});
