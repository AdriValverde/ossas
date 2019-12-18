<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class especialidadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('especialidads')->insert([
            'name' => 'Oncologia',
        ]);
        DB::table('especialidads')->insert([
            'name' => 'Pediatria',
        ]);
        DB::table('especialidads')->insert([
            'name' => 'Dermatologia',
        ]);
        DB::table('especialidads')->insert([
            'name' => 'Oftalmologia',
        ]);
        DB::table('especialidads')->insert([
            'name' => 'Urologia',
        ]);
        DB::table('especialidads')->insert([
            'name' => 'Traumatologia',
        ]);
    }
}
