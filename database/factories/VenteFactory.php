<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Vente::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'numero' => $faker->word,
        'montant' => $faker->randomFloat(),
        'reliquat' => $faker->randomFloat(),
        'date' => $faker->dateTime(),
       
        'clients_id' => factory(App\Client::class),
         'biens_id' => function () 
        {
            $bien=factory(App\Bien::class)->create(['categorie'=>'vente']);
            $bien->categorie='vente';
            return $bien->id;
            
        }
    ];
});
