<?php

namespace App\Http\Controllers;

use App\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
<<<<<<< HEAD

    public function __construct()
    {
        $this->middleware('auth');
    }
=======
>>>>>>> origin/master
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        {
            $locations = Location::all();

            return view('locations/index',['locations'=>$locations]);

        }
=======
        //
>>>>>>> origin/master
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        return view('locations/create');
=======
        //
>>>>>>> origin/master
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $this->validate($request, [
            'hospital' => 'required|max:255',
            'consulta' => 'required|max:255',
        ]);

        //TODO: crear validación propia
        $location = new Location($request->all());
        $location->save();


        flash('Localización creada correctamente');

        return redirect()->route('locations.index');
=======
        //
>>>>>>> origin/master
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function edit($id)
    {
        $location = Location::find($id);

        return view('locations/edit',['location'=> $location ]);
=======
    public function edit(Location $location)
    {
        //
>>>>>>> origin/master
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'hospital' => 'required|max:255',
            'consulta' => 'required|max:255',
        ]);

        //TODO: crear validación propia
        $location = Location::find($id);
        $location->fill (Location($request->all()));
        $location->save();


        flash('Localización editada correctamente');

        return redirect()->route('locations.index');
=======
    public function update(Request $request, Location $location)
    {
        //
>>>>>>> origin/master
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
<<<<<<< HEAD
        $location = Location::find($id);
        $location->delete();
        flash('Localización borrada correctamente');

        return redirect()->route('locations.index');
=======
        //
>>>>>>> origin/master
    }
}
