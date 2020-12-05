<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diasemana extends Model
{
    use HasFactory;

     //Definiendo la tabla del modelo
     protected $table = 'diasemana';

     //Definiendo los campos de la tabla
     protected $fillable = [
         'dias',
         
        ];
}
