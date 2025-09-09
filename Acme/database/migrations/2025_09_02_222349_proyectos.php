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
        Schema::create('Proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Proyecto',100);
            $table->foreignId('ubicacion_id')->constrained('ubicaciones');
            $table->foreignId('cliente_id')->constrained('users');
            $table->foreignId('arquitecto_responsable_id')->constrained('arquitectos');
            $table->string('Codigo_Tecnico',100);
            $table->string('Modulo',50);
            $table->string('Tipo_Proyecto',50);
            $table->string('Estado_Proyecto',50);
            $table->date('Fecha_Inicio');
            $table->date('Fecha_Estimada_Fin',50);
            $table->decimal('Presupuesto_Estimado',12,2);
            $table->text('Descripcion');
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
