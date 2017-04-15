<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tiposFinanciamientos extends Model
{
    protected $fillable = [
      
        'tipoFinanciamiento',
    ];

    public function fuenteFinanciamientos(){
        return $this->belongsto(fuentesFinanciamientos::class);
    }
}
