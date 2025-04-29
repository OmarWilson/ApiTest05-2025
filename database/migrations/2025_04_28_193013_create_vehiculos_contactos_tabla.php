<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('vehiculos_contactos', function (Blueprint $table) {
            $table->id();
            $table->string('placa', 20)->unique();
            $table->string('marca', 100);
            $table->string('modelo', 100);
            $table->year('anio_fabricacion');
            $table->string('nombre_cliente', 100);
            $table->string('apellidos_cliente', 100);
            $table->string('nro_documento_cliente', 20);
            $table->string('correo_cliente', 100);
            $table->string('telefono_cliente', 20);
            $table->timestamps(); 
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('vehiculos_contactos');
    }
};
