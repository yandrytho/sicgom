<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoProgramasEjecuciones extends Model
{
    protected $fillable = [
      
        'tipoProgramacionEjecucion',
        'valor',
        'totalMetaProgramada',
               
    ];

    public function ejecucionesPlanesPoas(){
        return $this->hasMany(ejecucionesPlanesPoas::class);
    }

    
}
