<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\VideoGame;

class WishlistController extends Controller
{ 
    public function add(Request $request)
    {
        Wishlist::validate($request);
        Wishlist::create($request->only(["videoGameId","userId"]));
        $data= VideoGame::all()->sortByDesc('admin');
        return view('user.index')->with("data",$data);
    }

    public function show()
    {
        $userId = Auth::user()->getId();
        $data = [];
        $wishlists = [];
        $wishlists = Wishlist::where('userId', $userId)->get(['videoGameId'])->toArray();
        $data["videoGames"] = VideoGame::find(array_values($wishlists));
        return view('user.wishlist.show')->with("data",$data);
    }
}