<?php

namespace App\Http\Controllers;

use App\Aula;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAllAulas()
    {
        return response()->json(Aula::all());
    }

    public function showOneAula($id)
    {
        return response()->json(Aula::find($id));
    }


    public function create(Request $request)
    {
        $aula = Aula::create($request->all());

        return response()->json($aula, 201);
    }

    public function update($id, Request $request)
    {
        $aula = Aula::findOrFail($id);
        $aula->update($request->all());

        return response()->json($aula, 200);
    }

    public function delete($id)
    {
        Aula::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }

}
