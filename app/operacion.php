<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class operacion extends Model
{
    protected $fillable=[
    	'idOperacion','monto','fechaOperacion','idProducto','idUsuario','idTipoImpuesto'
    ];
    public function producto()
    {
    	return this->morphTo();
    }
    public function usuario()
    {
    	return this->morphTo();
    }
    public function tipoImpuesto()
    {
    	return this->morphTo();
    }
}
