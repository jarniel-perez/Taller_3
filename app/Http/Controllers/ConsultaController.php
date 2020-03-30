<?php

namespace App\Http\Controllers;
use App\Hospital;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function hospitales(){
      $hospitales = Hospital::with('pacientes')->get();
      return $hospitales;
    }
}
