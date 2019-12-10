<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('productos')->insert(['nombreProducto'=>'volante','idTipoProducto'=>1]);
      DB::table('productos')->insert(['nombreProducto'=>'bocina','idTipoProducto'=>4]);
      DB::table('productos')->insert(['nombreProducto'=>'display','idTipoProducto'=>5]);
      DB::table('productos')->insert(['nombreProducto'=>'bocina','idTipoProducto'=>1]);
      DB::table('productos')->insert(['nombreProducto'=>'manubrio','idTipoProducto'=>1]);
      DB::table('productos')->insert(['nombreProducto'=>'ornilla','idTipoProducto'=>3]);
      DB::table('productos')->insert(['nombreProducto'=>'refrigerador','idTipoProducto'=>9]);
    }
}
