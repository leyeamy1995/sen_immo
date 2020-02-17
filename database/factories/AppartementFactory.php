<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Appartement::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'code' => $faker->word,
        'type_appartement' => $faker->word,
        'biens_id' => function () 
        {
            $bien=factory(App\Bien::class)->create(['type_biens'=>'appartement']);
            $bien->type_biens='appartement';
            return $bien->id;
            
        }
    ];
});
