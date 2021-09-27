<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Videogame;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AdminVideoGameController extends Controller
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

    public function create()
    {
        return view('admin.videogame.create');
    }

    public function save(Request $request)
    {
        $videoGame = new Videogame();
        $videoGame->title = $request->input('title');
        $videoGame->developer = $request->input('developer');
        $videoGame->category = $request->input('category');
        $videoGame->price = $request->input('price');
        $videoGame->used = $request->input('used');
        $videoGame->saleStock = $request->input('saleStock');
        $videoGame->rentStock = $request->input('rentStock');
        $videoGame->KeyWords = $request->input('keyWords');
        if($request->hasFile('picture'))
        {
            $file = $request->file('picture');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/videoGames/', $fileName);
            $videoGame->image = $fileName;
        }
        $videoGame->save();

        return back()->with('success','Videogame added successfully!');
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

    public function adminList()
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
        $destination = 'uploads/videoGames/'.$videogame->getPicture();
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $videogame->delete();

        $data = [];//To be sent to the view
        $data["videogames"] = Videogame::all()->sortByDesc('id');

        return view('admin.videogame.list')->with("data", $data);
    }
}