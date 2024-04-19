<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcedimentoController extends Controller
{
    public function index(){
        return view('agenda.pagina02');
    }
}