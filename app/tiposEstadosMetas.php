<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposEstadosMetas extends Model
{
    protected $fillable = [
      
        'tipoEstadoMeta',
        'descripcion',
    ];

    public function evaluacionesPlanificaciones(){
        return $this->belongsto(evaluacionesPlanificaciones::class);
    }
}
