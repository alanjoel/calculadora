<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('usuarios')->insert(['primerNombre'=>'Alan','apellidoPaterno'=>'Ibañez','usuario'=>'fazzlel','contrasena'=>'friki']);
      DB::table('usuarios')->insert(['primerNombre'=>'Fausto','apellidoPaterno'=>'Aquino','usuario'=>'facu','contrasena'=>'7124']);
    }
}
