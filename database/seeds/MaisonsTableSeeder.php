<?php

use Illuminate\Database\Seeder;

class MaisonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Maison::class, 10)->create();
    }
}
