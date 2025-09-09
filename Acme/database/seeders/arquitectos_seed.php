<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class arquitectos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('arquitectos')->insert([
            'user_id' => 1, 
            'Cedula_Profesional' => 'A123456',
            'Especialidad' => 'Arquitectura Residencial',
            'Telefono' => '6141234567',
            'Fecha_Ingreso' => '2020-01-15',
            'Activo' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('arquitectos')->insert([
            'user_id' => 4,  
            'Cedula_Profesional' => 'A987654',
            'Especialidad' => 'Arquitectura Comercial',
            'Telefono' => '6149876543',
            'Fecha_Ingreso' => '2019-06-10',
            'Activo' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
