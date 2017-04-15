<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planOperativos extends Model
{
    protected $fillable = [
      
        'planOperativo',
        'fechaInicio',
        'fechaFin',
            
    ];

    public function ejecucionesPlanesPoas(){
        return $this->hasMany(ejecucionesPlanesPoas::class);
    }

    public function programasPlanes(){
        return $this->hasMany(programasPlanes::class);
    }

}
