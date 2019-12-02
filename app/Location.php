<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['hospital', 'consulta'];

    public function citas()
    {
<<<<<<< HEAD
        return $this->hasMany('App/Cita');
    }
    public function getFullNameAttribute()
    {
        return $this->hospital .' '.$this->consulta;
=======
        return $this->hasMany('App\Cita');
    }

    public function getFullNameAttribute()
    {
        return $this->hospital .' Consulta:'.$this->consulta;
>>>>>>> origin/master
    }
}
