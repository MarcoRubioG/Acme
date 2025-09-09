<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class planos_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('planos')->insert([
            'proyecto_id' => 1,  
            'Nombre_Plano' => 'Planta Arquitectónica Nivel 1',
            'Tipo_Plano' => 'Planta Arquitectónica',
            'Escala' => '1:100',
            'Archivo_Path' => '/storage/planos/planta_nivel1_crm001.dwg',
            'Formato_Archivo' => 'DWG',
            'Num_Hojas' => '2',
            'Fecha_Actualizacion_Anterior' => '2024-01-20',
            'Fecha_Actualizacion_Actual' => '2024-02-01',
            'Version' => 'v1.2',
            'Estado_Plano' => 'Aprobado',
            'Observaciones' => 'Plano principal con distribución de espacios, incluye cotas y especificaciones técnicas',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('planos')->insert([
            'proyecto_id' => 2, 
            'Nombre_Plano' => 'Fachada Principal Corporativa',
            'Tipo_Plano' => 'Fachada',
            'Escala' => '1:50',
            'Archivo_Path' => '/storage/planos/fachada_principal_ofc002.pdf',
            'Formato_Archivo' => 'PDF',
            'Num_Hojas' => '1',
            'Fecha_Actualizacion_Anterior' => '2024-03-05',
            'Fecha_Actualizacion_Actual' => '2024-03-15',
            'Version' => 'v2.0',
            'Estado_Plano' => 'En Revisión',
            'Observaciones' => 'Fachada con elementos modernos, cristal templado y detalles de acabados exteriores',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
