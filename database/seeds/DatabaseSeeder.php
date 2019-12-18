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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
        DB::table('especialidads')->truncate();
        DB::table('locations')->truncate();
        DB::table('medicos')->truncate();
        DB::table('enfermedads')->truncate();
        DB::table('pacientes')->truncate();
        DB::table('doses')->truncate();
        DB::table('medicamentos')->truncate();
        DB::table('tratamientos')->truncate();
        DB::table('citas')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas

        // $this->call(UsersTableSeeder::class);
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

