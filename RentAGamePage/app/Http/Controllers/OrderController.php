<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VideoGame;
use App\Models\Order;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function check(Request $request)
    {
        $order = Order::findOrFail(4);
        //dd($order->getTotal());
        //dd($order->items[0]->getSubtotal());
        dd($order->items[0]->videoGame->getTitle());
    }

    public function buy(Request $request)
    {
        $data = []; //to be sent to the view
        $ids = $request->session()->get("videoGames"); //obtenemos ids de productos guardados en session
        $total = 0;
        if($ids)
        {
            $order = new Order();
            $order->setFullPrice(0);
            $order->setDate(Carbon::today());
            $order->setAddress(Auth::user()->getAddress());
            $order->save();
            $videoGames = VideoGame::find(array_values($ids));
            foreach ($videoGames as $videoGame) 
            {
                $item = new Item();
                $item->setOrder($order->getId());
                $item->setForRent(False);
                $item->setRentTime(30);
                $item->setVideoGame($videoGame->getId());
                $total = $total + $videoGame->getPrice();
                $item->setFullPrice($videoGame->getPrice());
                $item->save();
            }
            $order->setFullPrice($total);
            $order->save();
            $data = $order->getFullPrice();
        } else
        {
        }
        return view('user.cart.buy')->with("data",$data);
    }
}