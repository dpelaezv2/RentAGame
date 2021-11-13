<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //attributes id, fullPrice, forRent, rentTime, order_id, videoGame_id, created_at, updated_at
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getFullPrice()
    {
        return $this->attributes['fullPrice'];
    }

    public function setFullPrice($fullPrice)
    {
        $this->attributes['fullPrice'] = $fullPrice;
    }

    public function getForRent()
    {
        return $this->attributes['forRent'];
    }

    public function setForRent($forRent)
    {
        $this->attributes['forRent'] = $forRent;
    }

    public function getRentTime()
    {
        return $this->attributes['rentTime'];
    }

    public function setRentTime($rentTime)
    {
        $this->attributes['rentTime'] = $rentTime;
    }

    public function getOrder()
    {
        return $this->attributes['order_id'];
    }

    public function setOrder($order)
    {
        $this->attributes['order_id'] = $order;
    }

    public function getVideoGame()
    {
        return $this->attributes['videoGame_id'];
    }

    public function setVideoGame($videoGame)
    {
        $this->attributes['videoGame_id'] = $videoGame;
    }

    public function videoGame()
    {
        return $this->belongsTo(VideoGame::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
