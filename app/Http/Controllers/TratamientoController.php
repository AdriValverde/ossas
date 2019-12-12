<?php

namespace App\Http\Controllers;

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

        return view('tratamientos/index',['tratamientos'=>$tratamientos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tratamientos/create');
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

            'fecha_inicio' => 'required|date|after:now',
            'fecha_fin' => 'required|date|after:now',
            'descripcion' => 'required|max:255',
        ]);
        //dd($request);
        $tratamiento = new Tratamiento($request->all());
        $tratamiento->save();

        flash('Tratamiento crado correctamente');

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

        return view('tratamientos/edit',['tratamiento'=> $tratamiento]);
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
        $this->validate($request, [

            'fecha_inicio' => 'required|date|after:now',
            'fecha_fin' => 'required|date|after:now',
            'descripcion' => 'required|max:255',
        ]);

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
