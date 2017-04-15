<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class objetivosPNBV extends Model
{
    protected $fillable = [
      
        'idObjetivoEstrateticoInstitucional',
        'PNBV',
        'descripcion',
                
    ];

    public function objetivosEstrategicosInstitucionales(){
        return $this->belongsto(objetivosEstrategicosInstitucionales::class);
    }

    public function objetivoEstrategicosSemplades(){
        return $this->hasMany(objetivoEstrategicosSemplades::class);
    }

    
}
