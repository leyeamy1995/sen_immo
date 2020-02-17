<?php

use Illuminate\Database\Seeder;

class TerrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Terrain::class, 10)->create();
    }
}
