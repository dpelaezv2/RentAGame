<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoGame;
use App\Models\Order;
use App\Models\User;
use App\Models\Item;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewController extends Controller
{
    public function add(Request $request)
    {
        //Review::validate($request);

        Review::create([
            'description' => $request->only(["description"])["description"],
            'videoGame_id' => $request->only(["id"])["id"],
            'reviewDate' => Carbon::today(),
            'user_id' => Auth::id(),
        ]);
        return view('user.reviewSave');
    }

    public function list($id)
    {
        $videoGame = VideoGame::findOrFail($id);
        $data["review"] = $videoGame->reviews()->get();
        $data["videoGame"] = $videoGame;
        return view('user.reviewList')->with("data", $data);
    }

    public function form($id)
    {
        $videoGame = VideoGame::findOrFail($id);
        $data["videoGame"] = $videoGame;
        return view('user.reviews')->with("data", $data);
    }
}
