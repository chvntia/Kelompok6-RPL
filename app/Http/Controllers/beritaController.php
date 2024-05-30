<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function index()
    {
        return view('berita.index');
    }
    public function approval()
    {
        return view('berita.approval');
    }
    public function show()
    {
        return view('berita.show');
    }
    public function update($id)
    {
        return view('berita.update',compact('id'));
    }
}
