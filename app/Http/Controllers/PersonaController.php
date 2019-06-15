<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function showAllPersonas()
    {
        return response()->json(Persona::all());
    }

    public function showOnePersona($id)
    {
        return response()->json(Persona::find($id));
    }


    public function create(Request $request)
    {
        $persona = Persona::create($request->all());

        return response()->json($persona, 201);
    }

    public function update($id, Request $request)
    {
        $persona = Persona::findOrFail($id);
        $persona->update($request->all());

        return response()->json($persona, 200);
    }

    public function delete($id)
    {
        Persona::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

    // public function checkIfAlumnoTieneCalefaccion($id)
    // {
    //     $persona = Persona::findOrFail($id);
    //     $response = false;
    //     if($persona)
    //      DB::select('call proc_alumno_calefaccion(?,?)',array($id, $response));

    //     return response($response, 200);
    // }


}
