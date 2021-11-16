<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\VideoGame;
use Illuminate\Support\Facades;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use App\Interfaces\RandomMovie;

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
        $randomMovie = app(RandomMovie::class);
        $movie = $randomMovie->random();
        $data["movie"] = $movie;

        $response = Http::get('https://catfact.ninja/fact');
        $fact = json_decode($response->body());
        $data["frase"] = $fact->fact;
        $data["videogames"] = VideoGame::all();
        return view('user.index')->with("data", $data);
    }

    public function filterPrice()
    {
        $randomMovie = app(RandomMovie::class);
        $movie = $randomMovie->random();
        $data["movie"] = $movie;

        $response = Http::get('https://catfact.ninja/fact');
        $fact = json_decode($response->body());
        $data["frase"] = $fact->fact;
        $data["videogames"] = VideoGame::all()->sortByDesc('price');
        return view('user.index')->with("data", $data);
    }

    public function filterCategory()
    {
        $randomMovie = app(RandomMovie::class);
        $movie = $randomMovie->random();
        $data["movie"] = $movie;

        $response = Http::get('https://catfact.ninja/fact');
        $fact = json_decode($response->body());
        $data["frase"] = $fact->fact;
        $data["videogames"] = VideoGame::all()->sortBy('category');
        return view('user.index')->with("data", $data);
    }
}
