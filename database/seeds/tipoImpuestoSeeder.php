<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tipoImpuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tipo_impuestos')->insert(['nombreTipoImpuesto'=>'IVA','asignacionIva'=>'13']);
      DB::table('tipo_impuestos')->insert(['nombreTipoImpuesto'=>'SIN IVA','asignacionIva'=>'0']);
      DB::table('tipo_impuestos')->insert(['nombreTipoImpuesto'=>'CAL. IVA','asignacionIva'=>'13']);
    }
}
