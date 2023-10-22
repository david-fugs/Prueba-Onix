<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable= ['codigo','nombre','autor','año','genero','url']; //aca van los datos para la asignacion masiva
}
