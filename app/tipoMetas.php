<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoMetas extends Model
{
    protected $fillable = [
      
        'tipoMeta',
            
    ];

    public function metaPOA(){
        return $this->hasMany(metas_POA::class);
    }
}
