<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Videogame;

class VideogameController extends Controller
{

    public function create()
    {
        return view('activities.form');
    }

    public function save(Request $request)
    {
        $request->validate([
            "title" => "required",
            "developer" => "required",
            "category" => "required",
            "price" => "required|numeric|gt:0",
            "used" => "required",
            "saleStock" => "required|numeric|gt:0",
            "rentStock" => "required|numeric|gt:0",
            "keyWords" => "required"
        ]);
        Videogame::create($request->only(["title","developer","category","price","used","saleStock","rentStock","keyWords"]));

        return back()->with('success','Item created successfully!');
    }

    public function show($id)
    {
        $data = []; //to be sent to the view
        $product = Videogame::findOrFail($id);
        $data["product"] = $product;
    
        return view('activities.show')->with("data", $data);
    }

    public function list()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        $data["videogames"] = Videogame::all()->sortByDesc('id');
        return view('activities.list')->with("data",$data);
    }

    public function delete(Request $request)
    {
        $id = $request->VGid;
        $videogame = Videogame::find($id);
        $videogame->delete();

        $data = [];//To be sent to the view
        $data["videogames"] = Videogame::all()->sortByDesc('id');

        return view('activities.list')->with("data", $data);
    }

}