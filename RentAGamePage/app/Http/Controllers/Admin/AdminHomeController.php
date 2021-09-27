<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) 
        {
            if (Auth::user()->getAdmin() != 1) 
            {
                return redirect()->route('videogame.list');
            }
            return $next($request);
        });
    }

    public function index()
    {
        return view('admin.home.index');
    }
}