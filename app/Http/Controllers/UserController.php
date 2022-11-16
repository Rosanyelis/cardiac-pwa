<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function json()
    {
        $results = User::all()->toArray();
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
        return view('usuarios.index');
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
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'rol' => ['required'],
            'password' => ['required'],
        ],
        [
            'name.required' => 'El campo Nombre de Usuario es obligatorio',
            'email.required' => 'El campo Correo Electrónico es obligatorio',
            'email.email' => 'El Correo Electrónico debe cumplir con el formato',
            'email.unique' => 'El Correo Electrónico ingresado ya existe',
            'rol.required' => 'El campo Rol es obligatorio',
            'password.required' => 'El campo Contraseña es obligatorio',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'rol' => $request->rol,
            'password' => $request->password,
        ]);

        return response()->json(200);
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
        //
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
        $count = User::where('id', $id)->count();

        if ($count > 0) {
            User::where('id', $id)->delete();
            return response()->json(200);
        } else {
            return response()->json();
        }
    }
}
