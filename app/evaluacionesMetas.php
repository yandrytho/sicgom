<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class evaluacionesMetas extends Model
{
  protected $fillable = [
        'id',
        'idCategoriaEvidencia',
        'idTipoEstadoMeta',
        'idTiempoPlanificacion',
        'idmetaPOA',
        'cumplimientoEjecucion',
        'documentoEvidencia',
        'totalEjecucion',
        'observacion',
    ];

    public function CategoriaEvidencias(){
        return $this->belongsto(CategoriaEvidencias::class);
    }

    public function tiposEstadosMetas(){
        return $this->belongsto(tiposEstadosMetas::class);
    }
    public function tiemposPlanificiones(){
        return $this->belongsto(tiemposPlanificiones::class);
    }

    public function metasPoa(){
        return $this->belongsto(metaPoa::class);
    }
}
