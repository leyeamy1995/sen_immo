<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Maison::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'numero' => $faker->word,
        'nombre_chambre' => $faker->randomNumber(),
        'type_maison' => $faker->word,
         'biens_id' => function () 
        {
            $bien=factory(App\Bien::class)->create(['type_biens'=>'maison']);
            $bien->type_biens='maison';
            return $bien->id;
            
        }
    ];
});
