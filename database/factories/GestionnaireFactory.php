<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;

$factory->define(App\Gestionnaire::class, function (Faker $faker) {
    return [
       
        'matricule' =>$faker->regexify('G[0-9]{5}'),
        'users_id' => function () 
        {
            $user=factory(App\User::class)->create(['role'=>'gestionnaire']);
            $user->role='gestionnaire';
            return $user->id;
            
        }
    ];
});
