<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kategoriController extends Controller
{
    public function add(){
        return view('kategori.add');
    }

    public function update($id){
        return view('kategori.update', compact('id'));
    }
}