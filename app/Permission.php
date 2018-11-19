<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
   public function obra() {
   		return $this->belongsTo(Obra::Class);
   }
}
