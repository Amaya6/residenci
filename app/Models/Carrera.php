<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'carreras';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'carrera',
         
        ];
}
