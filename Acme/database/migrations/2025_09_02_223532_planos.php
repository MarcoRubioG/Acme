<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
     Schema::create('planos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proyecto_id')->constrained('proyectos');
            $table->string('Nombre_Plano',100);
            $table->string('Tipo_Plano',50);
            $table->string('Escala',50);
            $table->string('Archivo_Path',300);
            $table->string('Formato_Archivo',300);
            $table->string('Num_Hojas',6);
            $table->date('Fecha_Actualizacion_Anterior');
            $table->date('Fecha_Actualizacion_Actual');
            $table->string('Version',50);
            $table->string('Estado_Plano',50);
            $table->text('Observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
