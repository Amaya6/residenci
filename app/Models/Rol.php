<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'roles';

     //Definiendo los campos de la tabla
     protected $fillable = [
        'actividad',
         'estudiante_id',
         'area_id',
         'fecha',
  
        ];
}
