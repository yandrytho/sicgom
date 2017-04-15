<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class metaAcumuladas extends Model
{
   protected $fillable = [
        
        'idIndicador',
        'idObjetivoEstrategicoInstitucional',
        'fechaInicio',
        'fechaFin',
        
    ];

    public function indicadores(){
        return $this->belongsto(indicadores::class);
    }

    public function objetivosEstrategicosInstitucionales(){
        return $this->belongsto(objetivosEstrategicosInstitucionales::class);
    }

    public function metasPoa(){
        return $this->hasMany(metas_POA::class);
    }
}
