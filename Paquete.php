<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    protected $fillable = [
        'Peso', 'Estado', 'Direccion_Remitente', 'Nombre_Remitente',
        'NDocumento', 'Direccion_Llegada', 'Nombre_Remitido',
    ];
}
