<?php

namespace App\Http\Controllers;

use App\Cita;
use App\Medicamento;
use App\Tratamiento;
use Illuminate\Http\Request;

class TratamientoController extends Controller
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
        $tratamientos = Tratamiento::all();
        $medicamentos = Medicamento::all();

        return view('tratamientos/index',['tratamientos'=>$tratamientos,'medicamentos'=>$medicamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamentos = Medicamento::all();
        //dd($medicamentos);

        $citas = Cita::all()->pluck('full_cita','id');
        //dd($citas);
        $tratamiento = Tratamiento::all();

        return view('tratamientos/create', ['medicamentos'=> $medicamentos,'citas'=>$citas,'tratamientos'=>$tratamiento]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->get('medicamento_id') === "") {
            $request['medicamento_id'] = null; // or 'NULL' for SQL
            //dd($request->get('medicamento_id'));
        }

        $this->validate($request, [

            'fecha_inicio' => 'required|date|after:now',
            'fecha_fin' => 'required|date|after:now',
            'descripcion' => 'required|max:255',
            'medicamento_id' => 'nullable',
            'cita_id' => 'required|exists:citas,id'
        ]);
        //dd($request->get('medicamento_id'));


        $tratamiento = new Tratamiento($request->all());


        $tratamiento->save();


        flash('Tratamiento creado correctamente');

        return redirect()->route('tratamientos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Tratamiento $tratamiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tratamiento = Tratamiento::find($id);
        //dd($tratamiento->cita_id);

        $medicamentos = Medicamento::all();

        $citas = Cita::all()->pluck('full_cita','id');

        return view('tratamientos/edit',['tratamiento'=> $tratamiento, 'medicamentos'=> $medicamentos, 'citas'=>$citas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->get('medicamento_id') === "") {
            $request['medicamento_id'] = null; // or 'NULL' for SQL
            //dd($request->get('medicamento_id'));
        }
        $this->validate($request, [

            'fecha_inicio' => 'required|date|after:now',
            'fecha_fin' => 'required|date|after:now',
            'descripcion' => 'required|max:255',
            'medicamento_id' => 'nullable',
            'cita_id' => 'required|exists:citas,id'
        ]);
        //dd($request);


        $tratamiento = Tratamiento::find($id);

        $tratamiento->fill($request->all());

        $tratamiento->save();

        flash('Tratamiento modificado correctamente');

        return redirect()->route('tratamientos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tratamiento = Tratamiento::find($id);
        $tratamiento->delete();
        flash('Tratamiento borrado correctamente correctamente');

        return redirect()->route('tratamientos.index');
    }
}
