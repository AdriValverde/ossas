<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class enfermedadsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enfermedads')->insert([
            'nombre' => 'Cáncer de próstata',
            'especialidad_id' => '1',
        ]);

        DB::table('enfermedads')->insert([
            'nombre' => 'Cáncer de colon',
            'especialidad_id' => '1',
        ]);

        DB::table('enfermedads')->insert([
            'nombre' => 'Gripe',
            'especialidad_id' => '2',
        ]);
        DB::table('enfermedads')->insert([
            'nombre' => 'Varicela',
            'especialidad_id' => '2',
        ]);
        DB::table('enfermedads')->insert([
            'nombre' => 'Lunar berrugoso',
            'especialidad_id' => '3',
        ]);
        DB::table('enfermedads')->insert([
            'nombre' => 'Melanoma',
            'especialidad_id' => '3',
        ]);
        DB::table('enfermedads')->insert([
            'nombre' => 'Cataratas',
            'especialidad_id' => '4',
        ]);
        DB::table('enfermedads')->insert([
            'nombre' => 'Presbicia',
            'especialidad_id' => '4',
        ]);
        DB::table('enfermedads')->insert([
            'nombre' => 'Fimosis',
            'especialidad_id' => '5',
        ]);
        DB::table('enfermedads')->insert([
            'nombre' => 'Rotura de fémur',
            'especialidad_id' => '6',
        ]);
        DB::table('enfermedads')->insert([
            'nombre' => 'Esguince de tobillo',
            'especialidad_id' => '6',
        ]);
    }
}
