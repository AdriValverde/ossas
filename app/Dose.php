<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dose extends Model
{
    protected $fillable = ['unidades', 'frecuencia', 'instrucciones'];

    public function medicamentos(){
        return $this->belongsTo('App\Medicamentos');
    }

    public function getDoseCompletaAttribute()
    {
        return $this->unidades .' '.$this->frecuencia;
    }
}
