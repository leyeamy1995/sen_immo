<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
            $this->call(ClientsTableSeeder::class);
            $this->call(GestionnairesTableSeeder::class);
            //$this->call(BiensTableSeeder::class);
            $this->call(TerrainsTableSeeder::class);
            $this->call(MaisonsTableSeeder::class);
            $this->call(AppartementsTableSeeder::class);
            $this->call(locationsTableSeeder::class);
            $this->call(ventesTableSeeder::class);
            $this->call(ReglementsTableSeeder::class);
    }
}
