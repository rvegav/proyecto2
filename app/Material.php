<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
	protected $table = 'materiales';
    protected $fillable = ['m_descripcion', 'm_unidad_medida', 'm_costo', 'm_min_stock', 'm_cantidad_actual'];


 //    public function rubro(){
	// return $this->belongsTo(Rubro::Class);
	// }
}
