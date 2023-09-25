<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{
    // show all chirps
    public function index()
    {
        return view('chirps', [
            // 
        ]);
    }
}
