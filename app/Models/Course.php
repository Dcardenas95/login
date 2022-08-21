<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	#Investiga sobre SoftDeletes para evitar redundancia de datos en la base de datos.
	#Si se requiere crear un dato que ya se creó antes, sólo es restaurarlos.
    use HasFactory;

    protected $table = 'courses'; #No es necesario especificar la tabla si el modelo se llama igual

		#Sigue igual

    protected $fillable =
    [
       'nombre',
       'creditos',
       'primerdia',
       'segundodia'
    ];
}
