<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class objetivoEstrategicosSemplades extends Model
{
   protected $fillable = [
      
        'idPoliticaInstitucional',
        'idProgramaPlan',
        'idResponsableEstrategico',
        'idObjetivoPNBV',
        'idObjetivoEstrategicoInstitucional',
        'objetivoEstrategicoSemplade',
        
    ];

    public function politicasInstitucionales(){
        return $this->belongsto(politicasInstitucionales::class);
    }

    public function programasPlanes(){
        return $this->belongsto(programasPlanes::class);
    }

    public function responsablesEstrategicos(){
        return $this->belongsto(responsablesEstrategicos::class);
    }

    public function objetivoPNBV(){
        return $this->belongsto(objetivoPNBV::class);
    }

    public function objetivosEstrategicosInstitucionales(){
        return $this->belongsto(objetivosEstrategicosInstitucionaless::class);
    }
}
