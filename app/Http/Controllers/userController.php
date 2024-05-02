<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function index() {
        return view('user.index');
    }
    public function approval() {
        return view('user.approval');
    }
}
