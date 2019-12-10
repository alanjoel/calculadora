<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoProducto extends Model
{
    protected $fillable=[
    	'idTipoProducto','nombreTipoProducto','gravamen'
    ];
    public function productos()
    {
    	return $this->hasMany('App\producto','idTipoProducto');
    }
}
