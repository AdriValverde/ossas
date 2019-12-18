<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class pacientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pacientes')->insert([
            'name' => 'Juan',
            'surname' => 'Campillo',
            'nuhsa' => 'AN1234567890',
            'enfermedad_id' => '1'
        ]);

        DB::table('pacientes')->insert([
            'name' => 'Luis',
            'surname' => 'Rodriguez',
            'nuhsa' => 'AN1234567891',
            'enfermedad_id' => '6'

        ]);

        DB::table('pacientes')->insert([
            'name' => 'Dario',
            'surname' => 'Roman',
            'nuhsa' => 'AN1234567892',
            'enfermedad_id' => '4'

        ]);

        DB::table('pacientes')->insert([
            'name' => 'Juan',
            'surname' => 'Soto',
            'nuhsa' => 'AN1234567812',
            'enfermedad_id' => '10'

        ]);
        DB::table('pacientes')->insert([
            'name' => 'Auron',
            'surname' => 'Play',
            'nuhsa' => 'AN1234567855',
            'enfermedad_id' => '9'

        ]);
        DB::table('pacientes')->insert([
            'name' => 'Lionel',
            'surname' => 'Messi',
            'nuhsa' => 'AN1234567811',
            'enfermedad_id' => '7'

        ]);
        DB::table('pacientes')->insert([
            'name' => 'Carlos',
            'surname' => 'Bacca',
            'nuhsa' => 'AN1234567996',
            'enfermedad_id' => '6'

        ]);
        DB::table('pacientes')->insert([
            'name' => 'Ignacio',
            'surname' => 'Pérez',
            'nuhsa' => 'AN1234567657',
            'enfermedad_id' => '11'

        ]);



    }

}
