<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class medicamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doses')->insert([
            'nombre' => 'IBUPROFENO TEVA',
            'composión' => '600.0 mg',
            'presemtación' => 'recubrimiento con película',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-ibuprofeno%20teva_29382',
        ]);
        DB::table('doses')->insert([
            'nombre' => 'CHIROCANE',
            'composión' => 'Levobupivacaína hidrocloruro 2,5 mg/1 ml ',
            'presemtación' => 'solución inyectable',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-ibuprofeno%20teva_29382',
        ]);
        DB::table('doses')->insert([
            'nombre' => 'BRIVIACT ',
            'composión' => 'Briviact 10 mg/ml',
            'presemtación' => 'solución vía oral',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-briviact_prospecto_1151073021',
        ]);
        DB::table('doses')->insert([
            'nombre' => 'SUPOSITORIOS DE GLICERINA DR. TORRENTS ADULTOS ',
            'composión' => 'GLICEROL 3,27 g',
            'presemtación' => 'supositorio',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-supositorios+de+glicerina+dr.+torrents+adultos_prospecto_45647',
        ]);
        DB::table('doses')->insert([
            'nombre' => 'REFLEX Gel',
            'composión' => '100 mg de salicilato de metilo, 60 mg de esencia de trementina, 30 mg de alcanfor y 30 mg de mentol.',
            'presemtación' => 'gel de uso tópico',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-reflex_prospecto_59479',
        ]);
        DB::table('doses')->insert([
            'nombre' => 'REFLEX Gel',
            'composión' => '100 mg de salicilato de metilo, 60 mg de esencia de trementina, 30 mg de alcanfor y 30 mg de mentol.',
            'presemtación' => 'gel de uso tópico',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-reflex_prospecto_59479',
        ]);





    }
}
