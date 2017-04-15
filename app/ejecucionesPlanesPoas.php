<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ejecucionesPlanesPoas extends Model
{
    protected $fillable = [
        'id',
        'idPlanOperativo',
        'idTipoProgramacionEjecucion',
        'idCronogramaEjecucion',
        'descripcion',
        
    ];

    public function planOperativos(){
    	return $this->belongsto(planOperativos::class);
    }

    public function TipoProgramasEjecuciones(){
    	return $this->belongsto(TipoProgramasEjecuciones::class);
    }

    public function cronogramasEjecuciones(){
    	return $this->belongsto(cronogramasEjecuciones::class);
    }
}
