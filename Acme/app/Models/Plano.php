<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $table = "planos";
    
    protected $fillable = [
        'proyecto_id',
        'Nombre_Plano',
        'Tipo_Plano',
        'Escala',
        'Archivo_Path',
        'Formato_Archivo',
        'Num_Hojas',
        'Fecha_Actualizacion_Anterior',
        'Fecha_Actualizacion_Actual',
        'Version',
        'Estado_Plano',
        'Observaciones'
    ];

    protected $casts = [
        'Fecha_Actualizacion_Anterior' => 'date',
        'Fecha_Actualizacion_Actual' => 'date',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }
}