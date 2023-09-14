<?php

namespace App\Http\Controllers;

use App\Models\DatoCliente;
use Illuminate\Http\Request;

class DatoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = DatoCliente::all();
        return view('Cliente.consultar', ['datos'=>$datos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cliente/registrar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'documento' => 'required|unique:dato_clientes'
        ]);

        DatoCliente::create($request->all());
        $datos = DatoCliente::all();
        return view('Cliente.consultar', ['datos'=>$datos]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DatoCliente  $datoCliente
     * @return \Illuminate\Http\Response
     */
    public function show(DatoCliente $datoCliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DatoCliente  $datoCliente
     * @return \Illuminate\Http\Response
     */
    public function edit(DatoCliente $datoCliente)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DatoCliente  $datoCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DatoCliente $datoCliente)
    {
        $datoCliente->update($request->all());
        // $datoCliente->nombre = $request->input('nombre');
        // $datoCliente->apellido = $request->input('apellido');
        // $datoCliente->documento = $request->input('documento');
        // $datoCliente->estado = $request->input('estado');
        // $datoCliente->save();

        return to_route('url.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DatoCliente  $datoCliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(DatoCliente $datoCliente)
    {
        //
    }
}
