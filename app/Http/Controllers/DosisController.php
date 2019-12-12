<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosisController extends Controller
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
        $dosis = Dosis::all();

        return view('dosis/index',['dosis'=>$dosis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosis/create');
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
            'unidades' => 'required|max:255',
            'instrucciones' => 'required|max:255',
        ]);
        //dd($request);
        $dosis = new Dosis($request->all());
        $dosis->save();

        flash('Dosis creado correctamente');

        return redirect()->route('dosis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Dosis $dosis)
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
        $dosis = Dosis::find($id);

        return view('dosis/edit',['dosis'=> $dosis]);
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
            'unidades' => 'required|max:255',
            'instrucciones' => 'required|max:255',
        ]);

        $dosis = Dosis::find($id);
        $dosis->fill($request->all());

        $dosis->save();

        flash('Dosis modificado correctamente');

        return redirect()->route('dosis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dosis = Dosis::find($id);
        $dosis->delete();
        flash('Dosis borrado correctamente correctamente');

        return redirect()->route('dosis.index');
    }
}
