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


        $this->call(especialidadsSeeder::class);
        $this->call(locationSeeder::class);
        $this->call(medicosSeeder::class);
        $this->call(enfermedadsSeeder::class);
        $this->call(dosesSeeder::class);
        $this->call(medicamentosSeeder::class);
        $this->call(pacientesSeeder::class);
        $this->call(citasSeeder::class);
        $this->call(tratamientosSeeder::class);

    }







}

