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
            'composión' => 'Briviact 10 mg/ml',
            'presemtación' => 'solución vía oral',
            'link_vademecum' => 'https://www.vademecum.es/medicamento-briviact_prospecto_1151073021',
        ]);



    }
}
