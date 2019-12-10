<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable=[
    	'idUsuario','primerNombre','apellidoPaterno','usuario','contrasena'
    ];
    public function usuarios()
    {
    	return $this->hasMany('App\operacion','idUsuario');
    }
}
