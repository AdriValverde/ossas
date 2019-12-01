<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = ['fecha_inicio', 'medico_id', 'paciente_id','localizacion'];

    protected $dates = [
        'fecha_inicio', 'fecha_fin'
    ];

    public function medico()
    {
        return $this->belongsTo('App\Medico');
    }

    public function paciente()
    {
        return $this->belongsTo('App\Paciente');
    }
}
