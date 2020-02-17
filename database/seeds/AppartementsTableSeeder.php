<?php

use Illuminate\Database\Seeder;

class AppartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Appartement::class, 10)->create();
    }
}
