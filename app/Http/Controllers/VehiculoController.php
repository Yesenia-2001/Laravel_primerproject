<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = Vehiculo::all();
        return view('vehiculo.index')->with('vehiculos',$vehiculos);
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
        $vehiculos = new Vehiculo();

        $vehiculos->modelo = $request->get('modelo');
        $vehiculos->matricula = $request->get('matricula');
        $vehiculos->nombreconduc = $request->get('nombreconduc');
        $vehiculos->año = $request->get('año');
        $vehiculos->placa = $request->get('placa');
        $vehiculos->documentoconduc = $request->get('documentoconduc');
        $vehiculos->fechavencimiento = $request->get('fechavencimiento');
/*         $vehiculos->tarjetapropiedad = $request->get('tarjetapropiedad');
        $vehiculos->soat= $request->get('soat');
        $vehiculos->tecnomecanica = $request->get('tecnomecanica'); */


        $vehiculos->save();

        return redirect('/vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::find($id);
        return view('vehiculo.edit')->with('vehiculo',$vehiculo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);

        $vehiculo->modelo = $request->get('modelo');
        $vehiculo->matricula = $request->get('matricula');
        $vehiculo->nombreconduc = $request->get('nombreconduc');
        $vehiculo->año = $request->get('año');
        $vehiculo->placa = $request->get('placa');
        $vehiculo->documentoconduc = $request->get('documentoconduc');
        $vehiculo->fechavencimiento = $request->get('fechavencimiento');


        $vehiculo->save();

        return redirect('/vehiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo= Vehiculo::find($id);
        $vehiculo->delete();
        return redirect('/vehiculos');
    }
}
