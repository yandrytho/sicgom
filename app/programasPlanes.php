<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programasPlanes extends Model
{
    protected $fillable = [
      
        'programaPlan',
        'idPlanOperativo',
            
    ];

    public function planOperativos(){
        return $this->belongsto(planOperativos::class);
    }

    public function objetivosEstrategicosSemplades(){
        return $this->hasMany(objetivoEstrategicosSemplades::class);
    }

    public function objetivosEstrategicosInstitucionales(){
        return $this->hasMany(objetivosEstrategicosInstitucionales::class);
    }

}
