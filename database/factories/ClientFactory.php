<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\Client::class, function (Faker $faker) {
    return [
        'code' =>$faker->regexify('C[0-9]{5}'),
        'nom' => SnNmG::getName(),
        'prenom' => SnNmG::getFirstName(),
        'email' => $faker->safeEmail,
        'telephone' => $faker->PhoneNumber,
    ];
});
