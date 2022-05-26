<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::all();
        return response()->json($paquetes);
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
        $paquete = new Paquete();
        $paquete->cliente_id = $request->cliente_id;
        $paquete->salida = $request->salida;
        $paquete->llegada = $request->llegada;
        $paquete->descripcion = $request->descripcion;
        $paquete->precio = $request->precio;
        $paquete->precio_envio = $request->precio_envio;
        $paquete->save();
        return response()->json([
            "message" => "Paquete agregado correctamente"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paquete = Paquete::find($id);
        if (!empty($paquete)) {
            return response()->json($paquete);
        } else {
            return response()->json([
                "message" => "Ṕaquete no encontrado"
            ], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function edit(Paquete $paquete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paquete $paquete)
    {
        if (Paquete::where('id', $id)->exists()) {
            $paquete = Paquete::find($id);
            $paquete->descripcion = is_null($request->descripcion) ? $paquete->descripcion : $request->descripcion;
            $paquete->cliente_id = is_null($request->cliente_id) ? $paquete->cliente_id : $request->cliente_id;
            $paquete->salida = is_null($request->salida) ? $paquete->salida : $request->salida;
            $paquete->llegada = is_null($request->llegada) ? $paquete->llegada : $request->llegada;
            $paquete->precio = is_null($request->precio) ? $paquete->precio : $request->precio;
            $paquete->precio_envio = is_null($request->precio_envio) ? $paquete->precio_envio : $request->precio_envio;
            $paquete->save();
            return response()->json([
                "message" => "Paquete Actualizado correctamente"
            ], 404);
        } else {
            return response()->json([
                "message" => "Paquete no encontrado."
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paquete  $paquete
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Paquetes::where('id', $id)->exists()) {
            $paquete = Paquete::find($id);
            $paquete->delete();

            return response()->json([
                "message" => "Paquete eliminado correctamente"
            ], 202);
        } else {
            return response()->json([
                "message" => "Paquete no encontrado."
            ], 404);
        }
    }

    public function findByCliente($id)
    {
        $paquetes = Paquete::where('cliente_id', '=', $id)->get();

        if (!empty($paquetes)) {
            return response()->json($paquetes);
        } else {
            return response()->json([
                "message" => "Cliente no tiene paquetes registrados"
            ], 404);
        }
    }
}
