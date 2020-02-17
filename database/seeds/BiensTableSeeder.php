<?php

use Illuminate\Database\Seeder;

class BiensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bien::class, 10)->create();
    }
}
