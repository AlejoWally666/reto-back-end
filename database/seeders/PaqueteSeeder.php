<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paquetes')->insert([
            'descripcion' => 'Documentos',
            'salida' => 'Quito',
            'llegada' => 'Ambato',
            'valor_paquete' => 20.5,
            'precio_envio' => 2.0,
            'cliente_id' => 1
        ]);
        DB::table('paquetes')->insert([
            'descripcion' => 'Celular Samsung S8',
            'salida' => 'Quito',
            'llegada' => 'Esmeraldas',
            'valor_paquete' => 245.0,
            'precio_envio' => 4.5,
            'cliente_id' => 1
        ]);
        DB::table('paquetes')->insert([
            'descripcion' => 'Caja de Zapatos',
            'salida' => 'Quito',
            'llegada' => 'Cuenca',
            'valor_paquete' => 42.0,
            'precio_envio' => 5.0,
            'cliente_id' => 1
        ]);
        DB::table('paquetes')->insert([
            'descripcion' => 'Documentos',
            'salida' => 'Esmeraldas',
            'llegada' => 'Quito',
            'valor_paquete' => 80.0,
            'precio_envio' => 5.0,
            'cliente_id' => 3
        ]);
        DB::table('paquetes')->insert([
            'descripcion' => 'Ropa usada',
            'salida' => 'Quito',
            'llegada' => 'Manta',
            'valor_paquete' => 60.0,
            'precio_envio' => 4.0,
            'cliente_id' => 2
        ]);
        DB::table('paquetes')->insert([
            'descripcion' => 'Documentos',
            'salida' => 'El Carmen',
            'llegada' => 'Ambato',
            'valor_paquete' => 10.25,
            'precio_envio' => 4.5,
            'cliente_id' => 5
        ]);
        DB::table('paquetes')->insert([
            'descripcion' => 'Laptop Lenovo i7',
            'salida' => 'Ambato',
            'llegada' => 'Quito',
            'valor_paquete' => 1250.99,
            'precio_envio' => 6.0,
            'cliente_id' => 4
        ]);
        DB::table('paquetes')->insert([
            'descripcion' => 'Camarones congelados',
            'salida' => 'Sangolquí',
            'llegada' => 'Chillogallo',
            'valor_paquete' => 25.0,
            'precio_envio' => 3.25,
            'cliente_id' => 6
        ]);
    }
}
