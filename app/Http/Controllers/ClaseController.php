<?php

namespace App\Http\Controllers;

use App\Clase;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function showAllClases()
    {
        return response()->json(Clase::all());
    }

    public function showOneClase($id)
    {
        return response()->json(Clase::find($id));
    }


    public function create(Request $request)
    {
        $clase = Clase::create($request->all());

        return response()->json($clase, 201);
    }

    public function update($id, Request $request)
    {
        $clase = Clase::findOrFail($id);
        $clase->update($request->all());

        return response()->json($clase, 200);
    }

    public function delete($id)
    {
        Clase::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
