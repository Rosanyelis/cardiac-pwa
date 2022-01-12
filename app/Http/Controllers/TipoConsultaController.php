<?php

namespace App\Http\Controllers;

use App\Models\TipoConsulta;
use Illuminate\Http\Request;

class TipoConsultaController extends Controller
{
    public function json()
    {
        $results = TipoConsulta::all()->toArray();
        $data = ['data' => $results];
        return response()->json($data);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tipos_consultas.index');
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
        $request->validate([
            'nombre' => ['required', 'unique:tipo_consultas'],
        ],
            [
                'nombre.required' => 'El campo Nombre es obligatorio',
                'nombre.unique' => 'El valor del campo Nombre ya existe',
            ]);

        TipoConsulta::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoConsulta  $tipoConsulta
     * @return \Illuminate\Http\Response
     */
    public function show(TipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoConsulta  $tipoConsulta
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoConsulta  $tipoConsulta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoConsulta $tipoConsulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoConsulta  $tipoConsulta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = TipoConsulta::where('id', $id)->count();

        if ($count > 0) {
            TipoConsulta::where('id', $id)->delete();
            return response()->json(200);
        } else {
            return response()->json();
        }
    }
}
