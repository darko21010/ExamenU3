<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clientes = [
            [
                'Apellido' => 'Gonzalez',
                'Nombre' => 'Santiago',
                'Email' => 'Santi@prueba.com',
                'Direccion' => 'Calle Falsa 123',
                'Telefono' => '874254813',
            ],
            [
                'Apellido' => 'Rodriguez',
                'Nombre' => 'Martina',
                'Email' => 'Martina@prueba.com',
                'Direccion' => 'Avenida Siempre Viva 742',
                'Telefono' => '856789412',
            ],
            [
                'Apellido' => 'Lopez',
                'Nombre' => 'Fernando',
                'Email' => 'FerLopez@prueba.com',
                'Direccion' => 'Calle Libertad 456',
                'Telefono' => '875412963',
            ],
            [
                'Apellido' => 'Perez',
                'Nombre' => 'Valentina',
                'Email' => 'ValePerez@prueba.com',
                'Direccion' => 'Pasaje Los Pinos 321',
                'Telefono' => '987654312',
            ],
            [
                'Apellido' => 'Diaz',
                'Nombre' => 'Javier',
                'Email' => 'JaviDiaz@prueba.com',
                'Direccion' => 'Avenida Central 789',
                'Telefono' => '896325471',
            ],
            [
                'Apellido' => 'Morales',
                'Nombre' => 'Lucia',
                'Email' => 'LuciaM@prueba.com',
                'Direccion' => 'Calle Rosales 258',
                'Telefono' => '856974321',
            ],
            [
                'Apellido' => 'Ramirez',
                'Nombre' => 'Carlos',
                'Email' => 'CarlosR@prueba.com',
                'Direccion' => 'Boulevard del Sol 987',
                'Telefono' => '874562319',
            ],
        ];

        foreach ($clientes as $cliente) {
            Cliente::create($cliente);
        }
    }
}
