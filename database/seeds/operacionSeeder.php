<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class operacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
      DB::table('operacions')->insert(['monto'=>'222','fechaOperacion'=>'2019/12/11','idProducto'=>'1','idUsuario'=>'1','idTipoImpuesto'=>'1']);
      DB::table('operacions')->insert(['monto'=>'123','fechaOperacion'=>'2019/12/11','idProducto'=>'2','idUsuario'=>'2','idTipoImpuesto'=>'2']);
      DB::table('operacions')->insert(['monto'=>'55','fechaOperacion'=>'2019/12/11','idProducto'=>'3','idUsuario'=>'1','idTipoImpuesto'=>'3']);
      DB::table('operacions')->insert(['monto'=>'66','fechaOperacion'=>'2019/12/11','idProducto'=>'4','idUsuario'=>'2','idTipoImpuesto'=>'1']);
      DB::table('operacions')->insert(['monto'=>'44','fechaOperacion'=>'2019/12/11','idProducto'=>'1','idUsuario'=>'1','idTipoImpuesto'=>'2']);
    }
}
