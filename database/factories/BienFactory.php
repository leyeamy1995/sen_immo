<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Bien::class, function (Faker $faker) {
    $gestionnaire_id= App\Gestionnaire::get()->random()->id;
    return [
        'uuid' => $faker->uuid,
        'numero' => $faker->regexify('[A-Za-z0-9]{20}'),
        'prix' => $faker->randomFloat(),
        'adresse' => $faker->word,
        'etat_bien' => $faker->word,
        'description' => $faker->text,
        'superficie' => $faker->word,
        'type_biens' => $faker->randomElement($array = array ('maison','terrain','appartement')),
        'categorie' => $faker->randomElement($array = array ('vente','location')),
        'image_url' => $faker->word,
        'image_name' => $faker->word,
        'image_driver' => $faker->word,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
         'gestionnaires_id' => function() use($gestionnaire_id){
            return $gestionnaire_id;
         },
    ];
});
