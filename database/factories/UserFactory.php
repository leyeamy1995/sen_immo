<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Mouhamedfd\Generator\SnNameGenerator as SnNmG;
$factory->define(App\User::class, function (Faker $faker) {
    return [
        
        'nom' => SnNmG::getName(),
        'prenom' =>SnNmG::getFirstName(),
        'email' => $faker->safeEmail,
        'password' => bcrypt($faker->password),
        'telephone' => $faker->phoneNumber,
        'role' => $faker->randomElement($array = array ('gestionnaire vente','gestionnaire location')),
        'email_verified_at' => $faker->datetime(),
        'remember_token' => Str::random(10),
    ];
});
