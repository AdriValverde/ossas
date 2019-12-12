<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = ['fecha_inicio', 'fecha_fin', 'descripcion'];

    //protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function citas()
    {
        return $this->belongsTo('App\Cita');
    }

}
