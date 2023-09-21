<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MainpageController extends Controller
{
    public function mainpage() 
    {
        return view('layouts.mainpage');
    }
}
