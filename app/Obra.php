<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
     protected $fillable = ['nombre_proyecto', 'cliente_id', 'fecha_inicio', 'fecha_fin'];

    public function cliente(){
        return $this->belongsTo(Cliente::Class);
    }

	public function empleados(){
	return $this->belongsToMany(Empleado::Class)->withTimestamps();;
	}

	public function documentos(){
        return $this->hasMany(Documento::Class);
    }

    public function inventario(){
        return $this->hasMany(Inventario::Class);
    }
<<<<<<< HEAD

    public function compra(){
        return $this->hasMany(OrdenCompra::Class);
    }
    public function inventario(){
        return $this->hasMany(Inventario::Class);
    }
=======
>>>>>>> 12bf9022b901a4cbc29d6de78d1ade0d9f735312
}
