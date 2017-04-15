<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class politicasInstitucionales extends Model
{
    protected $fillable = [
      
        'politicaInstitucional',
        'descripcion',
            
    ];

    public function objetivosEstrategicosInstitucionales(){
        return $this->hasMany(objetivosEstrategicosInstitucionales::class);
    }
}
