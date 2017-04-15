<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class objetivosEstrategicosInstitucionales extends Model
{
   protected $fillable = [
      
        'idPrograma',
        'idResponsableEstrategico',
        'idPlanOperativo',
        'idPoliticaInstitucional',
        'idProgramaPlan',
        'fechaCreacion',
        'fechaModificacion',
        
    ];

    public function programas(){
        return $this->belongsto(programas::class);
    }

    public function responsablesEstrategicos(){
        return $this->belongsto(responsablesEstrategicos::class);
    }

    public function planOperativos(){
        return $this->belongsto(planOperativos::class);
    }

    public function politicasInstitucionales(){
        return $this->belongsto(politicasInstitucionales::class);
    }

    public function programasPlanes(){
        return $this->belongsto(programasPlanes::class);
    }
}
