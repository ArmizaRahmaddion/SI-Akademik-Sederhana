<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Welcome2Controller extends Controller
{
    public function index()
    {
        return view('Welcome2')
            ->with('');
    }

}