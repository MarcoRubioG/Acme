<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class Ubicacion_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('ubicaciones')->insert([
            'Calle' => 'Av. Tecnológico',
            'Numero_Propiedad' => '1234',
            'Colonia' => 'Centro',
            'Ciudad' => 'Nuevo Casas Grandes',
            'Estado' => 'Chihuahua',
            'Codigo_Postal' => '31700',
            'Zona' => 'Norte',
            'Referencia' => 'Frente al parque central, a dos cuadras de la presidencia municipal',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('ubicaciones')->insert([
            'Calle' => 'Calle Benito Juárez',
            'Numero_Propiedad' => '567',
            'Colonia' => 'Revolución',
            'Ciudad' => 'Casas Grandes',
            'Estado' => 'Chihuahua',
            'Codigo_Postal' => '31850',
            'Zona' => 'Sur',
            'Referencia' => 'Cerca del mercado municipal, esquina con Calle Hidalgo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
