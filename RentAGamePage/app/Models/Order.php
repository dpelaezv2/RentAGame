<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //attributes id, date, address, fullPrice, items, user, created_at, updated_at
    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getDate()
    {
        return $this->attributes['date'];
    }

    public function setDate($date)
    {
        $this->attributes['date'] = $date;
    }

    public function getAddress()
    {
        return $this->attributes['address'];
    }

    public function setAddress($address)
    {
        $this->attributes['address'] = $address;
    }

    public function getFullPrice()
    {
        return $this->attributes['fullPrice'];
    }

    public function setFullPrice($fullPrice)
    {
        $this->attributes['fullPrice'] = $fullPrice;
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}