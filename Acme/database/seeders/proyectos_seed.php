<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class proyectos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proyectos')->insert([
            'Nombre_Proyecto' => 'Casa Residencial Moderna',
            'ubicacion_id' => 1,
            'cliente_id' => 3,  
            'arquitecto_responsable_id' => 1, 
            'Codigo_Tecnico' => 'CRM-001-2024',
            'Modulo' => 'Residencial',
            'Tipo_Proyecto' => 'Casa Habitación',
            'Estado_Proyecto' => 'En Desarrollo',
            'Fecha_Inicio' => '2024-01-15',
            'Fecha_Estimada_Fin' => '2024-06-15',
            'Presupuesto_Estimado' => 2500000.00,
            'Descripcion' => 'Proyecto de casa moderna de 3 recámaras con diseño minimalista y acabados de lujo',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('proyectos')->insert([
            'Nombre_Proyecto' => 'Oficinas Corporativas Plaza',
            'ubicacion_id' => 2,
            'cliente_id' => 4, 
            'arquitecto_responsable_id' => 2, 
            'Codigo_Tecnico' => 'OFC-002-2024',
            'Modulo' => 'Comercial',
            'Tipo_Proyecto' => 'Oficinas',
            'Estado_Proyecto' => 'Planeación',
            'Fecha_Inicio' => '2024-03-01',
            'Fecha_Estimada_Fin' => '2024-12-01',
            'Presupuesto_Estimado' => 5000000.00,
            'Descripcion' => 'Edificio de oficinas de 5 pisos con área comercial en planta baja y estacionamiento',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
