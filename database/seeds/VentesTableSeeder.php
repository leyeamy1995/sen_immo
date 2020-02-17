<?php

use Illuminate\Database\Seeder;

class VentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vente::class, 10)->create();
    }
}
