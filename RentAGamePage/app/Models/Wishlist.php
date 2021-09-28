<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Wishlist extends Model
{
    //attributes id, videoGameId, userId, user, videogames, created_at, updated_at
    use HasFactory;

    protected $fillable = ['videoGameId','userId'];

    public static function validate(Request $request)
    {
        $request->validate(
            [
                "videoGameId" => "required",
                "userId" => "required",
            ]
        );
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getVideoGameId()
    {
        return $this->attributes['videoGameId'];
    }

    public function setVideoGameId($videoGameId)
    {
        $this->attributes['videoGameId'] = $videoGameId;
    }

    public function getUserId()
    {
        return $this->attributes['id'];
    }

    public function setUserId($id)
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