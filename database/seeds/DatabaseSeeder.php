<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(usuarioSeeder::class);
		$this->call(tipoProductoSeeder::class);
        $this->call(productoSeeder::class);
        $this->call(tipoImpuestoSeeder::class);
        $this->call(operacionSeeder::class);
        
        
        
        
    }
}
