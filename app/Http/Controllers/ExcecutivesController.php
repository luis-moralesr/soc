<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcecutivesController extends Controller
{
    public function index()
    {
        return view('executives');
    }
}
