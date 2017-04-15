<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actividadesMetas extends Model
{
   protected $fillable = [
        'actividadMeta',
        'descripcion',
    ];

    public function metasPoa(){
    	return $this->hasmany(metaPoa::class);
    }
}
