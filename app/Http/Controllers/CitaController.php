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
use Illuminate\Support\Facades\Redirect;
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

        //La nueva cita no debe solicitarse en una hora que ya este asignada a ese médico.

        $fecha_inicio_request=$cita->fecha_inicio;
        $medico_cita=$cita->medico_id;

        $cita_disp = Cita::where('fecha_inicio', '<=', $fecha_inicio_request)
            ->where('fecha_fin', '>', $fecha_inicio_request)
            ->where('medico_id', '=', $medico_cita)
            ->exists();

        //La especialidad del médico debe de ser la adecuada para atender la enfermedad del paciente

        $especialidadMedico=$cita->medico->especialidad;
        $especialidadEnfermedad=$cita->paciente->enfermedad->especialidad;

        if(($especialidadMedico!=$especialidadEnfermedad))
        {
            if ($cita_disp==true){
                return Redirect::back()->withErrors(['El médico no ofrece la especialidad requerida: '.$especialidadEnfermedad->name.'.',
                    'La hora de la cita no esta disponible']);
            }
            else{
                return Redirect::back()->withErrors('El médico no ofrece la especialidad requerida: '.$especialidadEnfermedad->name.'.');
            }
        }
        else{
            if ($cita_disp==true){
                return Redirect::back()->withErrors('La hora de la cita no esta disponible');
            }
            else{
                $cita->save();
                flash('Cita creada correctamente');
                return redirect()->route('citas.index');
            }
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
