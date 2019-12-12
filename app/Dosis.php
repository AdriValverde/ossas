<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosis extends Model
{
    protected $fillable = ['unidades', 'frecuencia', 'instrucciones'];

    public function medicamentos(){
        return $this->belongsTo('App\Medicamentos');
    }
    public function getDosisCompletaAttribute()
    {
        return $this->unidades .' '.$this->frecuencia;

    }
}
