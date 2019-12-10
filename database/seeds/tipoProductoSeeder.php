<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Accesorios para Autos','gravamen'=>'10']);
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Accesorios para Camara','gravamen'=>'10']);
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Accesorios para Cocina','gravamen'=>'15']);
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Accesorios para moto','gravamen'=>'15']);
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Accesorios para telefono','gravamen'=>'10']);
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Alfombre','gravamen'=>'20']);
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Altavoces y Parlantes','gravamen'=>'10']);
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Altavoz','gravamen'=>'10']);
      DB::table('tipo_productos')->insert(['nombreTipoProducto'=>'Aparato electrónico','gravamen'=>'15']);
    }
}
