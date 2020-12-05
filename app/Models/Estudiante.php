<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'estudiantes';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'nombres',
         'apellidos',
         'carrera_id',
         'sexo_id',
         'etnia_id',
         'procedencia',
         'telefono',
         'carnet',
        ];
}
