<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class dosesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doses')->insert([
            'unidades' => '1',
            'frecuencia' => 'cada 8 horas',
            'instrucciones' => 'disolver en agua',
        ]);

        DB::table('doses')->insert([
            'unidades' => '1',
            'frecuencia' => 'cada 24 horas',
            'instrucciones' => 'Inyectar 2,5 mg por vía subcutanea',
        ]);

        DB::table('doses')->insert([
            'unidades' => '2',
            'frecuencia' => 'cada 6 horas',
            'instrucciones' => 'Seguir indicaciones prospecto',
        ]);

        DB::table('doses')->insert([
            'unidades' => '1',
            'frecuencia' => 'cada 6 horas',
            'instrucciones' => 'Seguir indicaciones prospecto',
        ]);

        DB::table('doses')->insert([
            'unidades' => '1',
            'frecuencia' => 'cada 8 horas',
            'instrucciones' => 'Aplicar vía oral',
        ]);

        DB::table('doses')->insert([
            'unidades' => '1',
            'frecuencia' => 'cada 12 horas',
            'instrucciones' => 'Aplicar vía rectal',
        ]);

        DB::table('doses')->insert([
            'unidades' => '2',
            'frecuencia' => 'cada 8 horas',
            'instrucciones' => 'Aplicar vía oral, disuelto en agua',
        ]);

        DB::table('doses')->insert([
            'unidades' => '1',
            'frecuencia' => 'cada 12 horas',
            'instrucciones' => 'Aplicar vía tópica.',
        ]);

        DB::table('doses')->insert([
            'unidades' => '2',
            'frecuencia' => 'cada 8 horas',
            'instrucciones' => 'Aplicar vía oftalmica, 3 gotas en cada oído.',
        ]);

        DB::table('doses')->insert([
            'unidades' => '1',
            'frecuencia' => 'cada 24 horas',
            'instrucciones' => 'Aplicar vía intramuscular.',
        ]);

    }
}
