<?php

namespace App\Http\Controllers;

use App\Models\Plantilla;
use Illuminate\Http\Request;

class PlantillaController extends Controller
{
    public function json()
    {
        $results = Plantilla::all()->toArray();
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
        return view('plantillas.index');
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
            'nombre' => ['required', 'unique:plantillas'],
            'texto' => ['required'],
        ],
            [
                'nombre.required' => 'El campo Nombre de Plantilla es obligatorio',
                'nombre.unique' => 'El valor del campo Nombre de Plantilla ya existe',
                'texto.required' => 'El campo Descripción es obligatorio',
            ]);

        Plantilla::create([
            'nombre' => $request->nombre,
            'texto' => $request->texto,
        ]);

        return response()->json(200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function show(Plantilla $plantilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = Plantilla::where('id', $id)->count();
        if ($count > 0) {
            $results = Plantilla::where('id', $id)->first();
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
     * @param  \App\Models\Plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Plantilla $plantilla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plantilla  $plantilla
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Plantilla::where('id', $id)->count();

        if ($count > 0) {
            Plantilla::where('id', $id)->delete();
            return response()->json(200);
        } else {
            return response()->json(400);
        }
    }
}
