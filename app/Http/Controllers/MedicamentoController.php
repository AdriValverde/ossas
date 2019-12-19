<?php

namespace App\Http\Controllers;

use App\Dose;
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
    public function index(Request $request)
    {
        if(($request->get('nombre_comun') != null) ){
            $medicamentos = Medicamento::where('nombre_comun','LIKE', $request->get('nombre_comun'))->paginate(10);
        }
        else{
            $medicamentos = Medicamento::all();
        }

        return view('medicamentos/index',['medicamentos'=>$medicamentos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doses = Dose::all()->pluck('dose_completa','id');

        return view('medicamentos/create', ['doses'=>$doses]);
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
            'link_vademecum' => 'required|active_url',
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
        $doses = Dose::all()->pluck('dose_completa','id');

        return view('medicamentos/edit',['medicamento'=> $medicamento, 'doses'=>$doses]);
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
            'link_vademecum' => 'required|active_url',
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
