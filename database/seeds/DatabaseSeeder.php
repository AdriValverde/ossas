<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        // Ejecutar los seeders:
        $this->call(pacientesSeeder::class);
        $this->call(dosesSeeder::class);
        $this->call(medicamentosSeeder::class);
    }
}
