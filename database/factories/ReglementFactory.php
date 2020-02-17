<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Reglement::class, function (Faker $faker) {
    $clients_id= App\Clients::get()->random()->id;
   // $clients_id= App\Clients::get()->random()->id;
    //$clients_id= App\Clients::get()->random()->id;
    return [
        'uuid' => $faker->uuid,
        'numero' => regexify('[A-Za-z0-9]{20}'),
        'date' => $faker->dateTime(),
        'montant' => $faker->word,
        'mode_reglement' => $faker->word,
        'ventes_id' => factory(App\Vente::class),
        'clients_id' => function() use($client_id){
            return $client_id;
         },
        'locations_id' => factory(App\Location::class),
    ];
});
