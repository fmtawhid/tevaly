<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('templates.index');
    }

    public function courses()
    {
        return view('templates.courses');
    }

    public function travel()
    {
        return view('templates.travel');
    }

    public function cars()
    {
        return view('templates.cars');
    }
}
