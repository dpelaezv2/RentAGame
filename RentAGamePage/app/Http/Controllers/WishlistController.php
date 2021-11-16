<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\VideoGame;
use App\interfaces\RandomMovie;

class WishlistController extends Controller
{

    public function add(Request $request)
    {
        $randomMovie = app(RandomMovie::class);
        $movie = $randomMovie->random();
        $data["movie"] = $movie;

        $response = Http::get('https://catfact.ninja/fact');
        $fact = json_decode($response->body());
        $data["frase"] = $fact->fact;


        Wishlist::validate($request);
        Wishlist::create($request->only(["videoGameId","userId"]));
        $data["videogames"] = VideoGame::all()->sortByDesc('admin');
        return view('user.index')->with("data", $data);
    }

    public function show()
    {
        $userId = Auth::user()->getId();
        $data = [];
        $wishlists = [];
        $wishlists = Wishlist::where('userId', $userId)->get(['videoGameId'])->toArray();
        $data["videoGames"] = VideoGame::find(array_values($wishlists));
        return view('user.wishlist.show')->with("data", $data);
    }
}
