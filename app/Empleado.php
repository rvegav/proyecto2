<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['primerNombre', 'segundoNombre', 'primerApellido', 'segundoApellido', 'direccion', 'telefono', 'rubro'];
}
