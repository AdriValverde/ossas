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

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas

        // $this->call(UsersTableSeeder::class);
        $this->call(especialidadsSeeder::class);
        $this->call(locationSeeder::class);
    }
}
