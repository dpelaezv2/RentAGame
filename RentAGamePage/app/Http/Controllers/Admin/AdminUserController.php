<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            if (Auth::user()->getAdmin() == 0) {
                return redirect()->route('videogame.list');
            }
            return $next($request);
        });
    }

    public function list()
    {
        $data = [];
        $data["title"] = "Users";
        $data["users"] = User::all()->sortByDesc('admin');
        return view('admin.user.list')->with("data", $data);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function save(Request $request)
    {
        User::validate(($request));
        $request['password'] = Hash::make($request['password']);
        User::create($request->only(["name","email","password","address","admin"]));
        $data = [];
        $data["title"] = "Users";
        $data["users"] = User::all()->sortByDesc('admin');
        return view('admin.user.list')->with("data",$data);
    }

    public function delete(Request $request)
    {
        $id = $request->Userid;
        $user = User::find($id);
        $user->delete();

        $data = [];//To be sent to the view
        $data["title"] = "Users";
        $data["users"] = User::all()->sortByDesc('admin');

        return back()->with('success','Usuario borrado exitosamente!');
    }
}