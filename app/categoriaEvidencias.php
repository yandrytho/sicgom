<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoriaEvidencias extends Model
{
    protected $fillable = [
        'id',
        'categoria_evidencia',
    ];

    public function evaluacionesPlanificaciones(){
    	return $this->hasmany(evaluacionesPlanificaciones::class);
    }
}
