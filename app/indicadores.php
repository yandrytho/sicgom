<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class indicadores extends Model
{
     protected $fillable = [
      
        'indicador',
        'descripcion',
        
    ];

    public function metasAcumuladas(){
        return $this->hasMany(metasAcumuladas::class);
    }

    public function metasPOA(){
        return $this->hasMany(metas_POA::class);
    }
}
