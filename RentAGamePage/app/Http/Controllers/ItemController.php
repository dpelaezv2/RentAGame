<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ItemController extends Controller
{
    public function add($id, $forRent, Request $request)
    {
        $videoGames = $request->session()->get("videoGames");
        $forRent = $request->session()->get("forRent");
        $videoGames[$id] = $id;
        //echo($id);
        $forRent[$id] = $forRent;
        $request->session()->put('videoGames', $videoGames);
        $request->session()->put('forRent', $forRent);
        return back();
    }
  }
