<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class responsablesCumplimientoMetas extends Model
{
  protected $fillable = [
      
        'responsableCumplientoMetas',
            
    ];

    public function evaluacionesPlanificaciones(){
        return $this->belongsto(evaluacionesPlanificaciones::class);
    }
    public function metaPoa(){
        return $this->hasMany(metas_POA::class);
    }
}
