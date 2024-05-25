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
<<<<<<< HEAD
    public function update($id)
    {
        return view('berita.update',compact('id'));
    }
=======
>>>>>>> 4fef8d2b736ff92b02ace50aae7e2e222b478b5b
}
