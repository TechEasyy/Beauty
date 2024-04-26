<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProcedimentoController extends Controller
{
    public function crudProcedimento(){
        return view('crud.crudProcedimento');
    }
}