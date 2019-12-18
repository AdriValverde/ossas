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
        ]);

        DB::table('pacientes')->insert([
            'name' => 'Luis',
            'surname' => 'Rodriguez',
            'nuhsa' => 'AN1234567891',
        ]);

        DB::table('pacientes')->insert([
            'name' => 'Dario',
            'surname' => 'Roman',
            'nuhsa' => 'AN1234567892',
        ]);

        DB::table('pacientes')->insert([
            'name' => 'Agustin',
            'surname' => 'Aranda',
            'nuhsa' => 'AN1234567893',
        ]);



    }

}
