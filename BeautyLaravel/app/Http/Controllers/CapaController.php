<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapaController extends Controller
{
    public function index()
    {
        return view('capa.index');
    }
}
