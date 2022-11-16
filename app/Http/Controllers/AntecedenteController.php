<?php

namespace App\Http\Controllers;

use App\Models\Antecedente;
use Illuminate\Http\Request;

class AntecedenteController extends Controller
{
    public function json()
    {
        $results = Antecedente::all()->toArray();
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
        return view('antecedentes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'nombre' => ['required', 'unique:antecedentes'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
            'nombre.unique' => 'El valor del campo Nombre ya existe',
        ]);

        Antecedente::create([
            'nombre' => $request->nombre,
        ]);

        return response()->json(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Antecedente $antecedente)
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
        $count = Antecedente::where('id', $id)->count();
        if ($count > 0) {
            $results = Antecedente::where('id', $id)->first();
            $data = ['data' => $results];

            return response()->json($data);
        } else {
            return response()->json(400);
        }
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
        $request->validate([
            'nombre' => ['required'],
        ],
        [
            'nombre.required' => 'El campo Nombre es obligatorio',
        ]);

        $count = Antecedente::where('id', $id)->count();
        if ($count > 0) {
            $registro = Antecedente::where('id', $id)->first();
            $registro->nombre = $request->nombre;
            $registro->save();

            return response()->json(200);
        } else {
            return response()->json(400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Antecedente::where('id', $id)->count();

        if ($count > 0) {
            Antecedente::where('id', $id)->delete();
            return response()->json(200);
        } else {
            return response()->json();
        }
    }
}
