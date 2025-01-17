<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MembreController extends Controller
{
    public function dashboard()
    {
        return view('membre.dashboard');
    }
}