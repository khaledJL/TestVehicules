<?php

namespace App\Http\Controllers;

use App\Marque;
use Illuminate\Http\Request;
use Ramsey\Uuid\Type\Integer;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marques = Marque::all();
        return view('marques.index', compact('marques'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marques.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marque = new Marque();
        $marque->nom = request('nom');
        $marque->save();
        return redirect('/marques');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function show(Marque $marque)
    {
        return view('marques.show', compact('marque'));
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
        $marque = Marque::findOrFail($id);
        return view('marques.edit', compact('marque'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Integer $id
     * @param  \Illuminate\Http\Request  $request
     *
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $marque = Marque::findOrFail($id);

        $input = $request->all();

        $marque->fill($input)->save();

        return redirect('/marques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Integer $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $marque = Marque::findOrFail($id);
        $marque->vehicules()->delete();
        $marque->delete();
        return redirect('/marques');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Marque  $marque
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marque $marque)
    {
        //
    }
}
