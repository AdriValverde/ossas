<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tratamiento extends Model
{
    protected $fillable = ['fecha_inicio', 'fecha_fin', 'descripcion', 'medicamento_id'];

    //protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function citas()
    {
        return $this->belongsTo('App\Cita');
    }

    public function medicamento(){
        return $this->belongsTo('App\Medicamento');
    }

}
