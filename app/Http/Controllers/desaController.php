<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class desaController extends Controller
{
    public function data(){
        return view('desa.data');
    }
}
