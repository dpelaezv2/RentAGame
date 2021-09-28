<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Videogame;
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
        Review::validate($request);
        
        $review = new Review();
        $review->description = $request->input('description');
        $review->videoGame_id = $request->input('videoGameId');
        $review->reviewDate = $request->Carbon::today();
        $review->reviewDate = $request->input('user');
        $review->save();
        
        $data = [];
        $data["reviews"] = Review::where('videoGame_id', $request->input('videoGameId'));
        $reviews['game'] = $request->input('videoGameId');
        return view('user.reviews')->with("data",$data);
    }

    public function write($id)
    {
        $data = $id;
        return view('user.writeReview')->with("data",$data);
    }

    
}