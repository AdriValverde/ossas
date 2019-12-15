<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
    protected $fillable = ['nombre_comun', 'composicion', 'presentación', 'link_vademecum','doses_id'];

    public function doses(){
        return $this->belongsTo('App\Dose');
    }
    public function tratamientos(){
        return $this->hasMany('App\Tratamiento');
    }
}
