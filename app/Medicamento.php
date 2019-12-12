<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['medicamento_id', 'tratamiento_id', 'dosis_id','location_id'];

    public function dosis(){
        return $this->belongsTo('App\Dosis');
    }
    public function tratamientos(){
        return $this->hasMany('App\Tratamiento');
    }
}
