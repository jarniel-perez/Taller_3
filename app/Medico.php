<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
  protected $table = 'medicos';

  protected $fillable = [
    'nombre',
    'apellido',
    'edad',
    'sexo',
    'telefono',
    'email',
    'hospital_id'];

  protected $hidden = ['created_at','updated_at'];

  public function hospital(){
    return $this->belongsTo('App\Hospital', 'hospital_id');
  }

  public function pacientes(){
    return $this->hasMany('App\Paciente');
  }
}
