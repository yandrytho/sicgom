<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programas extends Model
{
   protected $fillable = [
      
        'programa',
        'fechaModificacion',
        'presupuesto',
        'descripcion',
              
    ];

    public function objetivosEstrategicosInstitucionales(){
        return $this->belongsto(objetivosEstrategicosInstitucionales::class);
    }
}
