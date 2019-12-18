<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class citasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('citas')->insert([
            'fecha_inicio' => Carbon::create('2019', '01', '13', '07', '33', '45'),
            'fecha_fin' => Carbon::create('2019', '01', '13', '07', '48', '45'),
            'medico_id' => '1',
            'paciente_id' => '1',
            'location_id' => '2',
        ]);

        DB::table('citas')->insert([
            'fecha_inicio' => Carbon::create('2019', '01', '22', '14', '12', '40'),
            'fecha_fin' => Carbon::create('2019', '01', '22', '14', '27', '40'),
            'medico_id' => '2',
            'paciente_id' => '3',
            'location_id' => '1',
        ]);

        DB::table('citas')->insert([
            'fecha_inicio' => Carbon::create('2019', '11', '22', '20', '00', '40'),
            'fecha_fin' => Carbon::create('2019', '11', '22', '20', '15', '40'),
            'medico_id' => '3',
            'paciente_id' => '2',
            'location_id' => '6',
        ]);

        DB::table('citas')->insert([
            'fecha_inicio' => Carbon::create('2019', '08', '10', '10', '25', '40'),
            'fecha_fin' => Carbon::create('2019', '08', '10', '10', '40', '40'),
            'medico_id' => '4',
            'paciente_id' => '2',
            'location_id' => '4',
        ]);

        DB::table('citas')->insert([
            'fecha_inicio' => Carbon::create('2019', '11', '30', '20', '03', '40'),
            'fecha_fin' => Carbon::create('2019', '11', '30', '20', '18', '40'),
            'medico_id' => '3',
            'paciente_id' => '7',
            'location_id' => '3',
        ]);

        DB::table('citas')->insert([
            'fecha_inicio' => Carbon::create('2019', '12', '18', '20', '35', '40'),
            'fecha_fin' => Carbon::create('2019', '12', '18', '20', '50', '40'),
            'medico_id' => '5',
            'paciente_id' => '4',
            'location_id' => '5',
        ]);
        DB::table('citas')->insert([
            'fecha_inicio' => Carbon::create('2019', '04', '03', '08', '00', '40'),
            'fecha_fin' => Carbon::create('2019', '04', '03', '08', '15', '40'),
            'medico_id' => '5',
            'paciente_id' => '8',
            'location_id' => '1',
        ]);
        DB::table('citas')->insert([
            'fecha_inicio' => Carbon::create('2019', '05', '06', '12', '50', '40'),
            'fecha_fin' => Carbon::create('2019', '05', '06', '13', '05', '40'),
            'medico_id' => '7',
            'paciente_id' => '6',
            'location_id' => '6',
        ]);




    }
}
