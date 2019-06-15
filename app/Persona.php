<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = "persona";

    protected $fillable = [
        'nombre', 'apellido', 'tipo_doc', 'nro_doc', 'sexo', 'fec_nacimiento' 
    ];
}
