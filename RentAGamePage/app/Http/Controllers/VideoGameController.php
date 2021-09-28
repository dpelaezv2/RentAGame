<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Review;
use App\Models\Videogame;
use Illuminate\Support\Facades;
use Illuminate\Http\Response;


class VideoGameController extends Controller
{ 
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
        $data = Videogame::all();
        return view('user.index', compact('data'));
    }

    public function showReviews($id)
    {
        $reviews = [];
        $reviews['reviews'] = Review::where('videoGame_id', $id)->get();
        $reviews['game'] = $id;
        return view('user.reviews')->with("data", $reviews);
    }

}
