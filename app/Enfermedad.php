<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enfermedad extends Model
{
    protected $fillable = ['nombre', 'especialidad_id','paciente_id'];

    public function especialidad()
    {
        return $this->belongsTo('App\Especialidad');
    }
    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
