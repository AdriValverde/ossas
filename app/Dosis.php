<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosis extends Model
{
    protected $fillable = ['medicamento_id'];

    public function medicamentos(){
        return $this->belongsTo('App\Medicamentos');
    }
}
