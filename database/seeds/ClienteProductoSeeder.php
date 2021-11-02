<?php

use Illuminate\Database\Seeder;
use App\ClienteProducto;

class ClienteProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ClienteProducto::class,500)->create();

    }
}
