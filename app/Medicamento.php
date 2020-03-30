<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
  protected $table = 'medicamentos';

  protected $fillable = [
    'nombre',
    'descripcion',
    'serial'];

  protected $hidden = ['created_at','updated_at'];

  public function pacientes(){
    return $this->belongsToMany('App\Paciente');
  }

}
