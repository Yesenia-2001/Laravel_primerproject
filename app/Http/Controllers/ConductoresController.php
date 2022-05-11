<?php

namespace App\Http\Controllers;

use App\Models\Conductores;
use Illuminate\Http\Request;

class ConductoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductores = Conductores::all();
        return view('conductores.index')->with('conductores',$conductores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $conductores = new Conductores();
    
            $conductores->nombre = $request->get('nombre');
            $conductores->apellido = $request->get('apellido');
            $conductores->telefono = $request->get('telefono');
            $conductores->direccion = $request->get('direccion');
            $conductores->numpase = $request->get('numpase');
         /*    $conductores->pase = $request->get('pase');
            $conductores->cedula = $request->get('cedula');
            $conductores->hv = $request->get('hv'); */
  
    
            $conductores->save();
    
            return redirect('/conductores');
        }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Conductores  $conductores
     * @return \Illuminate\Http\Response
     */
    public function show(Conductores $conductores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Conductores  $conductores
     * @return \Illuminate\Http\Response
     */
    public function edit(Conductores $conductores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Conductores  $conductores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conductores $conductores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Conductores  $conductores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conductores $conductores)
    {
        //
    }
}
