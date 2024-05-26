<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class layananController extends Controller
{
    public function add(){
        return view('layanan.add');
    }

    public function approval(){
        return view('layanan.approval');
    }

    public function show(){
        return view('layanan.show');
    }
}