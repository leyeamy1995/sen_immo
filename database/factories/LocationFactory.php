<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Location::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'numero' => $faker->word,
        'montant' => $faker->randomFloat(),
        'dateDebut' => $faker->dateTime(),
        'dateFin' => $faker->dateTime(),
        'clients_id' => factory(App\Client::class),
        'biens_id' => function () 
        {
            $bien=factory(App\Bien::class)->create(['categorie'=>'location']);
            $bien->categorie='location';
            return $bien->id;
            
        }
    ];
});
