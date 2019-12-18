<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class medicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicos')->insert([
            'name' => 'Jose Luis',
            'surname' => 'Archilla',
            'especialidad_id' => '1',
        ]);
        DB::table('medicos')->insert([
            'name' => 'Juan Vicente',
            'surname' => 'Gomez',
            'especialidad_id' => '2',
        ]);
        DB::table('medicos')->insert([
            'name' => 'Alejandro',
            'surname' => 'Roman',
            'especialidad_id' => '3',
        ]);
        DB::table('medicos')->insert([
            'name' => 'Fernando',
            'surname' => 'Belasteguin',
            'especialidad_id' => '3',
        ]);
        DB::table('medicos')->insert([
            'name' => 'Francisco',
            'surname' => 'Navarro',
            'especialidad_id' => '6',
        ]);
        DB::table('medicos')->insert([
            'name' => 'Pedro',
            'surname' => 'Lopez',
            'especialidad_id' => '5',
        ]);
        DB::table('medicos')->insert([
            'name' => 'Juan',
            'surname' => 'Marin',
            'especialidad_id' => '4',
        ]);
    }
}
