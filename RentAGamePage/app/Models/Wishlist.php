<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    //attributes id, user, videogames, created_at, updated_at
    
    protected $fillable = ['user'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function videogames()
    {
        return $this->hasMany(VideoGame::class);
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
}