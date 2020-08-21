<?php

namespace App\Http\Controllers;

use App\Marque;
use App\Modele;
use App\Vehicule;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class VehiculeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vehicules = Vehicule::all();

        return view('vehicules.index', compact('vehicules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marques = Marque::all();
        $modeles = Modele::all();
        return view('vehicules.create',compact('modeles','marques'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marque = Marque::where(['nom'=>request('marque')])->firstOrFail();
        $modele = Modele::where(['nom'=>request('modele')])->firstOrFail();


        $vehicule = new Vehicule();
        $vehicule->marque()->associate($marque);
        $vehicule->modele()->associate($modele);
        $vehicule->nom = request('nom');
        $vehicule->save();
        return redirect('/vehicules');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicule $vehicule)
    {
        return view('vehicules.show', compact('vehicule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer $id
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $vehicule = Vehicule::findOrFail($id);
        $marques = Marque::all();
        $modeles = Modele::all();
        return view('vehicules.edit', compact('vehicule','modeles','marques'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Integer $id
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $vehicule = Vehicule::findOrFail($id);
        $marque = Marque::where(['id'=>request('marque')])->firstOrFail();
        $modele = Modele::where(['id'=>request('modele')])->firstOrFail();

        $vehicule->marque()->associate($marque);
        $vehicule->modele()->associate($modele);
        $vehicule->nom = request('nom');
        $vehicule->save();

        return redirect('/vehicules');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vehicule = Vehicule::findOrFail($id);
        $vehicule->delete();
        return redirect('/vehicules');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicule  $vehicule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicule $vehicule)
    {
        //
    }
}
