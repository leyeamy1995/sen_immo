<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Terrain::class, function (Faker $faker) {
    return [
        'uuid' => $faker->uuid,
        'code' =>$faker->word,
        'biens_id' => function () 
        {
            $bien=factory(App\Bien::class)->create(['type_biens'=>'terrain']);
            $bien->type_biens='terrain';
            return $bien->id;
            
        }
    ];
});
