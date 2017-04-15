<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metas_POA extends Model
{
    protected $fillable = [
      
        'idActividadMeta',
        'idIndicador',
        'idResponsableCumplimientoMeta',
        'idMedioVerificacion',
        'idTipoMeta',
        'idMetaAcumulada',
        'idTipoMeta',
        'idFuenteFinanciamiento',
        'metaPOA',
        'fechaInicio',
        'fechaFin',
        'tiempoMeses',
        'metaProgramadaAnual',
        'observacion',
    ];

    public function actividadesMetas(){
        return $this->belongsto(actividadesMetas::class);
    }

    public function indicadores(){
        return $this->belongsto(indicadores::class);
    }

    public function responsablesCumplimientoMetas(){
        return $this->belongsto(responsablesCumplimientoMetas::class);
    }

    public function mediosVerificaciones(){
        return $this->belongsto(mediosVerificaciones::class);
    }

    public function tipoMetas(){
        return $this->belongsto(tipoMetas::class);
    }

    public function metasAcumuladas(){
        return $this->belongsto(metaAcumuladas::class);
    }

    public function fuentesFinanciamientos(){
        return $this->belongsto(fuentesFinanciamientos::class);
    }

    
}
