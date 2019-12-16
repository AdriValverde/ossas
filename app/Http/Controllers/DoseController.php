<?php

namespace App\Http\Controllers;

use App\Dose;
use Illuminate\Http\Request;

class DoseController extends Controller
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
        $doses = Dose::all();
        return view('doses/index',['doses'=>$doses]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doses/create');
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
            'unidades' => 'required',
            'frecuencia' => 'required|max:255',
            'instrucciones' => 'required|max:255',
        ]);
        //dd($request);
        $dose = new Dose($request->all());
        $dose->save();
        flash('Dosis creada correctamente');
        return redirect()->route('doses.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $dose = Dose::find($id);
        return view('doses/edit',['dose'=> $dose]);
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
            'unidades' => 'required',
            'frecuencia' => 'required|max:255',
            'instrucciones' => 'required|max:255',
        ]);
        $dose = Dose::find($id);
        $dose->fill($request->all());
        $dose->save();
        flash('Dosis modificada correctamente');
        return redirect()->route('doses.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dose = Dose::find($id);
        $dose->delete();
        flash('Dosis borrada correctamente');
        return redirect()->route('doses.index');
    }
}
