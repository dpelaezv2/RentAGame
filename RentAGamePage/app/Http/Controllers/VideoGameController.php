<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Videogame;
use Illuminate\Support\Facades;
use Illuminate\Http\Response;


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
            "keyWords" => "required",
            "picture" => 'image|mimes:png,jpg,jpeg|max:10000'
        ]);
        Videogame::create($request->only(["title","developer","category","price","used","saleStock","rentStock","keyWords", "picture"]));

        return back()->with('success','Item created successfully!');
    }
 
    public function show($id)
    {
        $data = []; //to be sent to the view
        $product = Videogame::findOrFail($id);
        $data["product"] = $product;
    
        return view('')->with("data", $data);
    }

    public function fetchImage($imageId)
    {
        $videoGame = Videogame::findOrFail($imageId);
        $imageFile = $videoGame::make($videoGame->picture);
        $response = Response::make($imageFile->encode('jpeg'));
        $response ->header('Content-Type', 'image/jpeg');
        return $response; 

    }

    public function list()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Lista de Juegos";
        $data["videogames"] = Videogame::all()->sortByDesc('Name');
        return view('home.index')->with("data",$data);
    }

    public function amdinList()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Lista de Juegos";
        $data["videogames"] = Videogame::all();
        return view('admin.videogame.list')->with("data",$data);
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
