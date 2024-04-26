<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function TerceiraTela(){
        return view('atendimento.TerceiraTela');
    }
}