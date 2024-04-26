<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function crudCliente(){
        return view('crud.crudCliente');
    }
}