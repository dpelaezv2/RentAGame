<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CartController extends Controller
{
    public function showCart(Request $request)
    {
        $data = []; //to be sent to the view
        $ids = $request->session()->get("videoGames"); //obtenemos ids de productos guardados en session
        $rent = $request->session()->get("forRent");
        if($ids)
        {
            $data["videoGames"] = VideoGame::find(array_values($ids));
            $data["forRent"] = $rent;
        }else
        {
            $data["videoGames"] = array();
            $data["forRent"] = array();
        }

        return view('user.cart.show')->with("data",$data);
    }

    public function delete(Request $request)
    {
        $request->session()->forget('videoGames');
        $request->session()->forget('forRent');
        return back();
    }
}