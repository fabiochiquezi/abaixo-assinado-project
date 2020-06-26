<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabelaDeDados extends Controller
{
    public function index(){
        return view('system.tabelaDeDados');
    }
}
