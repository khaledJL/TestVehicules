<?php

namespace App\Http\Controllers;

use App\Modele;
use Highlight\Mode;
use Illuminate\Http\Request;

class ModeleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modeles = Modele::all();
        return view('modeles.index', compact('modeles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modeles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $modele = new Modele();
        $modele->nom = request('nom');
        $modele->save();
        return redirect('/modeles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function show(Modele $modele)
    {
        return view('modeles.show', compact('modele'));
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
        $modele = Modele::findOrFail($id);

        return view('modeles.edit', compact('modele'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  Integer $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $modele = Modele::findOrFail($id);

        $input = $request->all();

        $modele->fill($input)->save();

        return redirect('/modeles');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $modele = Modele::findOrFail($id);
        $modele->vehicules()->delete();
        $modele->delete();
        return redirect('/modeles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Modele  $modele
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modele $modele)
    {
        //
    }
}
