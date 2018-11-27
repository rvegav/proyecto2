<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCompra extends Model
{
    public function material(){
    	return $this->belongsTo(Material::Class);
    }

}
