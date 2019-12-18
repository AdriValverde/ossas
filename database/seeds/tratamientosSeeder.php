<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class tratamientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tratamientos')->insert([
            'fecha_inicio' => Carbon::create('2020', '01', '01'),
            'fecha_fin' => Carbon::create('2020', '03', '15'),
            'descripcion' => 'Seguir indicaciones del médico.',
            'medicamento_id' => '1',
            'cita_id' => '1'
        ]);

        DB::table('tratamientos')->insert([
            'fecha_inicio' => Carbon::create('2020', '01', '11'),
            'fecha_fin' => Carbon::create('2020', '01', '15'),
            'descripcion' => 'Seguir indicaciones del médico.',
            'medicamento_id' => '3',
            'cita_id' => '2'


        ]);

        DB::table('tratamientos')->insert([
            'fecha_inicio' => Carbon::create('2020', '02', '11'),
            'fecha_fin' => Carbon::create('2020', '03', '11'),
            'descripcion' => 'Seguir indicaciones del médico.',
            'medicamento_id' => '4',
            'cita_id' => '3'


        ]);

        DB::table('tratamientos')->insert([
            'fecha_inicio' => Carbon::create('2020', '08', '11'),
            'fecha_fin' => Carbon::create('2021', '01', '11'),
            'descripcion' => 'Seguir indicaciones del médico.',
            'medicamento_id' => '5',
            'cita_id' => '4'



        ]);

        DB::table('tratamientos')->insert([
            'fecha_inicio' => Carbon::create('2020', '03', '28'),
            'fecha_fin' => Carbon::create('2022', '11', '11'),
            'descripcion' => 'Seguir indicaciones del médico.',
            'medicamento_id' => '3',
            'cita_id' => '5'



        ]);

        DB::table('tratamientos')->insert([
            'fecha_inicio' => Carbon::create('2020', '01', '30'),
            'fecha_fin' => Carbon::create('2020', '02', '15'),
            'descripcion' => 'Seguir indicaciones del médico.',
            'medicamento_id' => '5',
            'cita_id' => '6'


        ]);

        DB::table('tratamientos')->insert([
            'fecha_inicio' => Carbon::create('2020', '05', '22'),
            'fecha_fin' => Carbon::create('2020', '09', '30'),
            'descripcion' => 'Seguir indicaciones del médico.',
            'medicamento_id' => '6',
            'cita_id' => '7'


        ]);

        DB::table('tratamientos')->insert([
            'fecha_inicio' => Carbon::create('2020', '05', '10'),
            'fecha_fin' => Carbon::create('2020', '07', '11'),
            'descripcion' => 'Seguir indicaciones del médico.',
            'medicamento_id' => '1',
            'cita_id' => '8'


        ]);



    }
}
