<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Redirect;

class Cita extends Model
{
    protected $fillable = ['fecha_inicio', 'medico_id', 'paciente_id','location_id'];

    protected $dates = ['fecha_inicio', 'fecha_fin'];

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }
    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
    public function tratamiento()
    {
        return $this->belongsTo('App\Tratamiento');
    }
    public function setFechaInicioAttribute($date)
    {
        if (is_string($date))
            $this->attributes['fecha_inicio'] = Carbon::parse($date);
    }

    public function getFullCitaAttribute(){
        return 'Paciente: '.$this->paciente->name.', visita al Dr. '.$this->medico->full_name.' en la fecha: '.$this->fecha_inicio->format('Y-m-d');
    }
}
