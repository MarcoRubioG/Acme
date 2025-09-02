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
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->id();
            $table->string('Calle',100);
            $table->string('Numero_Propiedad',50);
            $table->string('Colonia',50);
            $table->string('Ciudad',50);
            $table->string('Estado',50);
            $table->string('Codigo_Postal',10);
            $table->string('Zona',10);
            $table->text('Referencia');
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
