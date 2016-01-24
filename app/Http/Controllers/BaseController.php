<?php

namespace App\Http\Controllers;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
