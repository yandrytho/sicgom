<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiemposPlanificaciones extends Model
{
    protected $fillable = [
      
        'tiempoPlanificacion',
        'descripcion',
            
    ];

    public function evaluacionesPlanificaciones(){
        return $this->hasMany(evaluacionesPlanificaciones::class);
    }


}
