<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mediosVerificaciones extends Model
{
    protected $fillable = [
        
        'medioVerificacion',
        
    ];

    public function metasPOA(){
        return $this->hasMany(metas_POA::class);
    }
}
