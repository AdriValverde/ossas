<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    protected $fillable = ['name', 'surname', 'nuhsa'];


    public function citas()
    {
        return $this->hasMany('App\Cita');
    }


    public function getFullNameAttribute()
    {
        return $this->name .' '.$this->surname;
    }
}
