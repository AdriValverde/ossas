<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['nombre_comun', 'composicion', 'presentación', 'link_vademecum','dosis_id'];

    public function dosis(){
        return $this->belongsTo('App\Dosis');
    }
    public function tratamientos(){
        return $this->hasMany('App\Tratamiento');
    }
}
