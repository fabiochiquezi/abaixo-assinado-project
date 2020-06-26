<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabelaDeDados extends Controller
{
    public function index(){
        // echo '<pre>';
        // print_r(request()->path());
        // print_r();
        return view('system.tabelaDeDados');
    }
}
