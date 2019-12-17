<?php

namespace App\Http\Controllers;

use App\Enfermedad;
use App\Tratamiento;
use Carbon\Carbon;
use http\Message;
use Illuminate\Http\Request;
use App\Cita;
use App\Medico;
use App\Paciente;
use App\Location;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\ReconstitutingADocBlockTest;


class CitaController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citas = Cita::all();

        return view('citas/index',['citas'=>$citas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = Medico::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');

        $locations = Location::all()->pluck('full_name','id');




        return view('citas/create',['medicos'=>$medicos, 'pacientes'=>$pacientes, 'locations'=>$locations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id|',
            'location_id' => 'required|exists:locations,id',
            'fecha_inicio' => 'required|date|after:now',

        ]);

        $cita = new Cita($request->all());

        $fecha_inicio_copy = clone $cita->fecha_inicio;
        $cita->fecha_fin = $fecha_inicio_copy->addMinutes(15);
        //dd($cita->fecha_fin);

        $especialidadMedico=$cita->medico->especialidad;
        $especialidadEnfermedad=$cita->paciente->enfermedad->especialidad;

        if($especialidadMedico==$especialidadEnfermedad){
            $cita->save();
            flash('Cita creada correctamente');
            return redirect()->route('citas.index');

        }
        else{
            flash('El médico no ofrece la especialidad requerida: '.$especialidadEnfermedad->name.'.');
            return redirect()->route('citas.create');
        }













    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cita = Cita::find($id);


        $medicos = Medico::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');

        $locations = Location::all()->pluck('full_name','id');





        return view('citas/edit',['cita'=> $cita, 'medicos'=>$medicos, 'pacientes'=>$pacientes,
            'locations'=>$locations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',
            'location_id' => 'required|exists:locations,id',
            'fecha_inicio' => 'required|date|after:now',
        ]);
        $cita = Cita::find($id);
        $cita->fill($request->all());
        $fecha_inicio_copy = clone $cita->fecha_inicio;
        $cita->fecha_fin = $fecha_inicio_copy->addMinutes(15);

        $cita->save();

        flash('Cita modificada correctamente');

        return redirect()->route('citas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cita = Cita::find($id);
        $cita->delete();
        flash('Cita borrada correctamente');

        return redirect()->route('citas.index');
    }
}
