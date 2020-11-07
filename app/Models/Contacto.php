<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email'
    ];
    protected $hidden = [
        'created_at', 'updated_at'
    ];
}
