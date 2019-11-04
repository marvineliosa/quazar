<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registro_socio extends Controller
{
    public function mostrarformulario(){

      return view('Registro_socio');
    }

    public function devuelverespuesta(){

      return 'Datos Enviados';
    }


}
