<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre' => 'Edgar Alejandro Salas',
            'cedula' => '1723302690',
            'telefono' => '0996803139',
            'correo' => 'easalas@gmail.com',
            'direccion' => 'Conocoto'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Brayan David Erazo',
            'cedula' => '1234567890',
            'telefono' => '0987654321',
            'correo' => 'bderazo@gmail.com',
            'direccion' => 'Chillogallo'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Fernando Dair Sánchez',
            'cedula' => '1234567899',
            'telefono' => '0987654322',
            'correo' => 'fdsanchez@gmail.com',
            'direccion' => 'Esmeraldas'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'María Elena Carvajal',
            'cedula' => '1234567898',
            'telefono' => '0987654323',
            'correo' => 'mecarvajal@gmail.com',
            'direccion' => 'Ambato'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Rosa Esperanza Zambrano',
            'cedula' => '1708669964',
            'telefono' => '0987654324',
            'correo' => 'rezambrano@gmail.com',
            'direccion' => 'El Carmen, Manabí'
        ]);
        DB::table('clientes')->insert([
            'nombre' => 'Juan Carlos Velasco',
            'cedula' => '1234567897',
            'telefono' => '0987654325',
            'correo' => 'jcvelasco@gmail.com',
            'direccion' => 'Sangolquí'
        ]);
    }
}
