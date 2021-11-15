<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\VideoGame;
use Illuminate\Support\Facades;
use Illuminate\Http\Response;

class VideoGameController extends Controller
{

    public function show($id)
    {
        $data = []; //to be sent to the view
        $product = VideoGame::findOrFail($id);
        $data["product"] = $product;

        return view('')->with("data", $data);
    }

    public function fetchImage($imageId)
    {
        $videoGame = VideoGame::findOrFail($imageId);
        $imageFile = $videoGame::make($videoGame->picture);
        $response = Response::make($imageFile->encode('jpeg'));
        $response ->header('Content-Type', 'image/jpeg');
        return $response;
    }

    public function list()
    {
        $data = VideoGame::all();
        return view('user.index')->with("data", $data);
    }

    public function list2()
    {
        return view('home.index');
    }

    public function filterPrice()
    {
        $data = VideoGame::all()->sortByDesc('price');
        return view('user.index')->with("data", $data);
    }

    public function filterCategory()
    {
        $data = VideoGame::all()->sortBy('category');
        return view('user.index')->with("data", $data);
    }
}
