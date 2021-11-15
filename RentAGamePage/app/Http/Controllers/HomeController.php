<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function indexEn()
    {
        setlocale(0,"en");
        return view('home.index');
    }

    public function indexEs()
    {
        setlocale(0,"es");
        return view('home.index');
    }

    public function home()
    {
        return redirect()->route('home.index');
    }
}
