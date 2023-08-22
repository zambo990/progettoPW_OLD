<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getHome()
    {
        return view('index');
    }

    public function getDetails()
    {
        return view('product');
    }
}
