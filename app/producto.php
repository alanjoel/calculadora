<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable=[
    	'idProducto','nombreProducto','idTipoProducto'
    ];
    public function operacions()
    {
    	return $this->hasMany('App\operacion','idProducto');
    }
    public function producto()
    {
    	return this->morphTo();
    }
}
