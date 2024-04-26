<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapaController extends Controller
{
    public function capa(){
        return view('capa.index');
    }
}
