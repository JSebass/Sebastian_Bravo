<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function index(){
        return view('principal');
    }
    public function mision(){
        return view('informacion.mision_y_vision');
    }
    public function contactos(){
        return view('informacion.contactos');
    }
}
