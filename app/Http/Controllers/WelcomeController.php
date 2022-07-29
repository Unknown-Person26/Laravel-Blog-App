<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //Index
    public function index()
    {
        return view('frontpages.welcomepages.index');
    }
}
