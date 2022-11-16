<?php

namespace App\Http\Controllers;

use App\Models\Medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    public function json()
    {
        $results = Medicamento::all()->toArray();
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
        return view('medicamentos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamentos.create');
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
            'nombre' => ['required'],
            'descripcion' => ['required'],
            'indicaciones' => ['required'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'descripcion.required' => 'El campo Descripción es obligatorio',
            'indicaciones.required' => 'El campo Indicaciones es obligatorio',
        ]);
        Medicamento::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'indicaciones' => $request->indicaciones,
        ]);

        return response()->json(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function show(Medicamento $medicamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicamento $medicamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicamento  $medicamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicamento $medicamento)
    {
        //
    }
}
