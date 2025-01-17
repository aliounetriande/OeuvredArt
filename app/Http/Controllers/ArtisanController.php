<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArtisanController extends Controller
{
    public function dashboard()
    {
        return view('artisan.dashboard');
    }
}