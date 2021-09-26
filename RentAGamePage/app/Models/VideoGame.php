<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    use HasFactory;
    
    //attributes id, title, developer, category, price, used, saleStock, rentStock, keyWords, created_at, updated_at
    protected $fillable = ['title', 'developer', 'category', 'price', 'used', 'saleStock', 'rentStock', 'keyWords' ];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getTitle()
    {
        return $this->attributes['title'];
    }

    public function setTitle($title)
    {
        $this->attributes['title'] = $title;
    }

    public function getDeveloper()
    {
        return $this->attributes['developer'];
    }

    public function setDeveloper($developer)
    {
        $this->attributes['developer'] = $developer;
    }

    public function getCategory()
    {
        return $this->attributes['category'];
    }

    public function setCategory($category)
    {
        $this->attributes['category'] = $category;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }

    public function getUsed()
    {
        return $this->attributes['used'];
    }

    public function setUsed($used)
    {
        $this->attributes['used'] = $used;
    }

    public function getSaleStock()
    {
        return $this->attributes['saleStock'];
    }

    public function setSaleStock($saleStock)
    {
        $this->attributes['saleStock'] = $saleStock;
    }

    public function getRentStock()
    {
        return $this->attributes['rentStock'];
    }

    public function setRentStock($rentStock)
    {
        $this->attributes['rentStock'] = $rentStock;
    }

    public function getKeyWords()
    {
        return $this->attributes['keyWords'];
    }

    public function setKeyWords($keyWords)
    {
        $this->attributes['keyWords'] = $keyWords;
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}