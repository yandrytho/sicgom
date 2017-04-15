<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cronogramasEjecuciones extends Model
{
    protected $fillable = [
        'id',
        'fechaInicio',
        'fechaFin',
        'tiempoEjecucionMeses',
    ];

    public function ejecucionesPlanesPoas(){
    	return $this->hasmany(ejecucionesPlanesPoas::class);
    }
}
