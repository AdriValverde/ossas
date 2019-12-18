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
        DB::table('medicamentos')->insert([
            'nombre_comun' => 'IBUPROFENO TEVA',
            'composicion' => '600.0 mg',
            'presentación' => 'recubrimiento con película',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-ibuprofeno%20teva_29382',
            'doses_id' => '1',
        ]);
        DB::table('medicamentos')->insert([
            'nombre_comun' => 'CHIROCANE',
            'composicion' => 'Levobupivacaína hidrocloruro 2,5 mg/1 ml ',
            'presentación' => 'solución inyectable',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-ibuprofeno%20teva_29382',
            'doses_id' => '2',

        ]);
        DB::table('medicamentos')->insert([
            'nombre_comun' => 'BRIVIACT ',
            'composicion' => 'Briviact 10 mg/ml',
            'presentación' => 'solución vía oral',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-briviact_prospecto_1151073021',
            'doses_id' => '3',

        ]);
        DB::table('medicamentos')->insert([
            'nombre_comun' => 'SUPOSITORIOS DE GLICERINA DR. TORRENTS ADULTOS ',
            'composicion' => 'GLICEROL 3,27 g',
            'presentación' => 'supositorio',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-supositorios+de+glicerina+dr.+torrents+adultos_prospecto_45647',
            'doses_id' => '4',

        ]);
        DB::table('medicamentos')->insert([
            'nombre_comun' => 'FRENADOL',
            'composicion' => '100 mg de salicilato de metilo en paracetamol.',
            'presentación' => 'Sobre efervescente',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-frenadol+comp.+efervescente_prospecto_65457',
            'doses_id' => '8',

        ]);
        DB::table('medicamentos')->insert([
            'nombre_comun' => 'REFLEX Gel',
            'composicion' => '100 mg de salicilato de metilo, 60 mg de esencia de trementina, 30 mg de alcanfor y 30 mg de mentol.',
            'presentación' => 'gel de uso tópico',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-reflex_prospecto_59479',
            'doses_id' => '5',

        ]);





    }
}
