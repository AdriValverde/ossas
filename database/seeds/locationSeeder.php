<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class locationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'hospital' => 'Virgen del Rocio',
            'consulta' => '5',
        ]);
        DB::table('locations')->insert([
            'hospital' => 'Macarena',
            'consulta' => '4',
        ]);
        DB::table('locations')->insert([
            'hospital' => 'Quiron',
            'consulta' => '2',
        ]);
        DB::table('locations')->insert([
            'hospital' => 'Valme',
            'consulta' => '6',
        ]);
        DB::table('locations')->insert([
            'hospital' => 'Tomillar',
            'consulta' => '5',
        ]);
        DB::table('locations')->insert([
            'hospital' => 'Viamed',
            'consulta' => '2',
        ]);
    }
}
