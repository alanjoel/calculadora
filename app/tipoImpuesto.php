<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoImpuesto extends Model
{
    protected $fillable=[
    	'idTipoImpuesto','nombreTipoImpuesto','asignacionIva'
    ];
    public function operacions()
    {
    	return $this->hasMany('App\operacion','idTipoImpuesto');
    }
}
