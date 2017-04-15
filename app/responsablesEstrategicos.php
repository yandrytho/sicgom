<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class responsablesEstrategicos extends Model
{
    protected $fillable = [
      
        'responsableEstrategico',
        'descripcion',
            
    ];


    public function objetivosEstrategicosInstitucionales(){
        return $this->hasMany(objetivosEstrategicosInstitucionales::class);
    }
}
