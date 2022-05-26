<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
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
        $cliente = new Cliente;
        $cliente->nombre = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->cedula = $request->cedula;
        $cliente->correo = $request->correo;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return response()->json([
            "message" => "Cliente agregado correctamente"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::find($id);
        if (!empty($cliente)) {
            return response()->json($cliente);
        } else {
            return response()->json([
                "message" => "Cliente no encontrado"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        if (Cliente::where('id', $id)->exists()) {
            $cliente = Cliente::find($id);
            $cliente->nombre = is_null($request->nombre) ? $cliente->nombre : $request->nombre;
            $cliente->direccion = is_null($request->direccion) ? $cliente->direccion : $request->direccion;
            $cliente->cedula = is_null($request->cedula) ? $cliente->cedula : $request->cedula;
            $cliente->correo = is_null($request->correo) ? $cliente->correo : $request->correo;
            $cliente->telefono = is_null($request->telefono) ? $cliente->telefono : $request->telefono;
            $cliente->save();
            return response()->json([
                "message" => "Cliente actualizado corectamente"
            ], 404);
        } else {
            return response()->json([
                "message" => "Cliente no encontrado"
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Cliente::where('id', $id)->exists()) {
            $cliente = Cliente::find($id);
            $cliente->delete();

            return response()->json([
                "message" => "Cliente eliminado correctamente"
            ], 202);
        } else {
            return response()->json([
                "message" => "Cliente no encontrado."
            ], 404);
        }
    }
}
