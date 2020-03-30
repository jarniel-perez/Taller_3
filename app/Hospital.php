<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $table = 'hospitals';

    protected $fillable = [
      'nombre',
      'cuidad',
      'direccion',
      'telefono',
      'email'];

    protected $hidden = ['created_at','updated_at'];

    public function director(){
      return $this->hasOne('App\Director');
    }

    public function medicos(){
      return $this->hasMany('App\Medico');
    }

    public function pacientes(){
      return $this->hasManyThrough('App\Paciente','App\Medico');
    }
}
