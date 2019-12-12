<?php

namespace App\Http\Controllers;

use App\Dosis;
use App\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
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
        $medicamentos = Medicamento::all();

        return view('medicamentos/index',['medicamentos'=>$medicamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosis = Dosis::all()->pluck('dosis_completa','id');

        return view('medicamentos/create', ['dosis'=>$dosis]);
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
            'nombre_comun' => 'required|max:255',
            'composicion' => 'required|max:255',
            'presentación' => 'required|max:255',
            'link_vademecum' => 'required|max:255',
        ]);

        $medicamento = new Medicamento($request->all());
        //dd($medicamento);

        $medicamento->save();


        flash('Medicamento creado correctamente');

        return redirect()->route('medicamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
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
        $medicamento = Medicamento::find($id);
        $dosis = Dosis::all()->pluck('dosis_completa','id');

        return view('medicamentos/edit',['medicamento'=> $medicamento, 'dosis'=>$dosis]);
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
            'nombre_comun' => 'required|max:255',
            'composicion' => 'required|max:255',
            'presentación' => 'required|max:255',
            'link_vademecum' => 'required|max:255',
        ]);

        $medicamento = Medicamento::find($id);
        //dd($medicamento);
        $medicamento->fill($request->all());

        $medicamento->save();

        flash('Medicamento modificado correctamente');

        return redirect()->route('medicamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tratamiento  $tratamiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamento = Medicamento::find($id);
        $medicamento->delete();
        flash('Medicamento borrado correctamente correctamente');

        return redirect()->route('medicamentos.index');
    }
}
