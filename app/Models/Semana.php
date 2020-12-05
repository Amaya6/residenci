<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semana extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'semanas';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'semana',
         
        ];
}
