<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class desaController extends Controller
{
    public function kegiatan()
    {
        return view('desa.kegiatan');
    }

    public function approval()
    {
        return view('desa.approval');
    }

    public function show()
    {
        return view('desa.show');
    }
}
