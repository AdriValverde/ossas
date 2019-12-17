<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tratamiento extends Model
{
    protected $fillable = ['fecha_inicio', 'fecha_fin', 'descripcion', 'medicamento_id','cita_id'];

    protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function cita()
    {
        return $this->belongsTo('App\Cita');
    }

    public function medicamento(){
        return $this->belongsTo('App\Medicamento');
    }

    public function setFechaInicioAttribute($date)
    {
        if (is_string($date))
            $this->attributes['fecha_inicio'] = Carbon::parse($date);
    }

    public function setFechaFinAttribute($date)
    {
        if (is_string($date))
            $this->attributes['fecha_fin'] = Carbon::parse($date);
    }


}
