<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table = "proyectos";
    
    protected $fillable = [
        'Nombre_Proyecto',
        'ubicacion_id',
        'cliente_id',
        'arquitecto_responsable_id',
        'Codigo_Tecnico',
        'Modulo',
        'Tipo_Proyecto',
        'Estado_Proyecto',
        'Fecha_Inicio',
        'Fecha_Estimada_Fin',
        'Presupuesto_Estimado',
        'Descripcion'
    ];

    protected $casts = [
        'Fecha_Inicio' => 'date',
        'Fecha_Estimada_Fin' => 'date',
        'Presupuesto_Estimado' => 'decimal:2'
    ];

    // Relación con Planos
    public function planos()
    {
        return $this->hasMany(Plano::class, 'proyecto_id');
    }
}