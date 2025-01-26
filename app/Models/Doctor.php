<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
// Especificamos el nombre de la tabla en la base de datos
protected $table = 'doctors';
    // Especificamos los campos que se pueden llenar
    protected $fillable = [
        'nombre', 'apellido', 'especialidad', 'telefono', 'email',
    ];
}
