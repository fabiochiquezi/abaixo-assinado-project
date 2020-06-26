<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AbaixoAssinado extends Controller
{
    public function pageEdit(){
        return view('system.abaixoAssinado');
    }
}
