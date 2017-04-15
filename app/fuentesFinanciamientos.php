<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fuentesFinanciamientos extends Model
{
   protected $fillable = [
        
        'idTipoEstadoMeta',
        'idTipoFinanciamiento',
        'valor',
        'descripcion',
    ];

    public function metaPOA(){
        return $this->hasMany(metas_POA::class);
    }

    public function tiposEstadosMetas(){
        return $this->belongsto(tiposEstadosMetas::class);
    }

    public function tiposFinanciamientos(){
        return $this->belongsto(tiposFinanciamientos::class);
    }
}
