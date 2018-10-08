<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['primerNombre', 'segundoNombre', 'primerApellido', 'segundoApellido', 'direccion', 'telefono'];
}
