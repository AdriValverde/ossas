<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = ['name', 'surname', 'nuhsa','enfermedad_id'];


    public function citas()
    {
        return $this->hasMany('App\Cita');
    }

    public function enfermedad()
    {
        return $this->belongsTo('App\Enfermedad');
    }

    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname.' - '.$this->enfermedad->nombre.': '. $this->enfermedad->especialidad->name;
    }


}
