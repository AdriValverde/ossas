<?php

namespace App\Http\Controllers;

use App\Enfermedad;
use Illuminate\Http\Request;
use App\Paciente;


class PacienteController extends Controller
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
    public function index(Request $request)
    {
        $enfermedades = Enfermedad::all();

        if(($request->get('name') != null) AND ($request->get('enfermedad_id')!=null)){

            $pacientes = Paciente::where('enfermedad_id','=', $request->get('enfermedad_id'))
                ->where('name','LIKE', $request->get('name'))->paginate(10);
        }
        elseif(($request->get('name') == null) AND ($request->get('enfermedad_id')!=null)){
            $pacientes = Paciente::where('enfermedad_id','=', $request->get('enfermedad_id'))->paginate(10);
        }
        elseif(($request->get('name') != null) AND ($request->get('enfermedad_id')==null)){
            $pacientes = Paciente::where('name','LIKE', $request->get('name'))->paginate(10);
        }
        else{
            $pacientes = Paciente::all();
        }

        return view('pacientes/index',['pacientes'=>$pacientes, 'enfermedades'=>$enfermedades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $enfermedades = Enfermedad::all()->pluck('nombre','id');

        return view('pacientes/create',['enfermedades'=>$enfermedades]);

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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'nuhsa' => 'required|regex:/^AN([0-9]{10})/|alpha_num|unique:pacientes',
            'enfermedad_id' => 'required|exists:enfermedads,id',
        ]);

        $paciente = new Paciente($request->all());
        $paciente->save();

        // return redirect('especialidades');

        flash('Paciente creado correctamente');

        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);
        return view('citas/index')->with('paciente', $paciente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::find($id);

        $enfermedades = Enfermedad::all()->pluck('nombre','id');

        return view('pacientes/edit',['paciente'=> $paciente, 'enfermedades'=>$enfermedades]);
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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'nuhsa' => 'required|regex:/^AN([0-9]{10})/|alpha_num|unique:pacientes',
            'enfermedad_id' => 'required|exists:enfermedads,id',
        ]);

        $paciente = Paciente::find($id);
        $paciente->fill($request->all());

        $paciente->save();

        flash('Paciente modificado correctamente');

        return redirect()->route('pacientes.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
        flash('Paciente borrado correctamente');

        return redirect()->route('pacientes.index');
    }
}
