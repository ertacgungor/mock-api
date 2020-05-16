<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function howToUse()
    {
        return view('howToUse');
    }

    public function mocks()
    {
        return view('mocks');
    }

    public function management()
    {
        # code...
    }
}
