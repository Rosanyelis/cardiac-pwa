<?php

namespace App\Http\Controllers;

use App\Models\Antecedente;
use App\Http\Requests\Antecedentes\StoreAntecedenteRequest;
use App\Http\Requests\Antecedentes\UpdateAntecedenteRequest;

class AntecedenteController extends Controller
{
    public function json()
    {
        $results = Antecedente::all()->toArray();
        $data =  ['data' => $results,];
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
        return view('antecedentes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAntecedenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAntecedenteRequest $request)
    {

        Antecedente::create([
            'nombre' => $request->nombre,
        ]);

        return redirect('/configuracion/antecedentes')->with('success', 'Registro Guardado');
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
    public function edit(Antecedente $antecedente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAntecedenteRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAntecedenteRequest $request, Antecedente $antecedente)
    {
        //
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

        if ($count>0) {
            Antecedente::where('id', $id)->delete();
            return response()->json(200);
        } else {
            return response()->json();
        }
    }
}
