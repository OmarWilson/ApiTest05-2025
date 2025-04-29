<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VehiculoContacto extends Model
{

    protected $table = 'vehiculos_contactos';

    protected $fillable = [
        'placa',
        'marca',
        'modelo',
        'anio_fabricacion',
        'nombre_cliente',
        'apellidos_cliente',
        'nro_documento_cliente',
        'correo_cliente',
        'telefono_cliente',
    ];
}
