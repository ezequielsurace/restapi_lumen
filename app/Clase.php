<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Clase extends Model 
{
    protected $table = "clase";

    protected $fillable = [
        'nombre', 'idProfesor', 'idAlumno', 'fecha', 'hora', 'idAula'
    ];

}
