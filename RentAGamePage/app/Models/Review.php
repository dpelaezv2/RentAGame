<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    //attributes id, description, videogame_id, reviewdate, user, created_at, updated_at

    protected $fillable = ['description', 'videoGame_id', 'reviewDate', 'user_id'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getDescription()
    {
        return $this->attributes['description'];
    }

    public function setDescription($description)
    {
        $this->attributes['description'] = $description;
    }

    public function getVideoGame_id()
    {
        return $this->attributes['videoGame_id'];
    }

    public function setVideoGame_id($videoGame_id)
    {
        $this->attributes['videoGame_id'] = $videoGame_id;
    }

    public function getReviewDate()
    {
        return $this->attributes['reviewDate'];
    }

    public function setReviewDate($reviewDate)
    {
        $this->attributes['reviewDate'] = $reviewDate;
    }

    public function getUserId()
    {
        return $this->attributes['userId'];
    }

    public function setUserId($userId)
    {
        $this->attributes['userId'] = $userId;
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public static function validate(Request $request)
    {
        $request->validate(
            [
                "description" => "required",
                "videoGame_id" => "required",
                "reviewDate" => "required",
                "user_id" => "required",
            ]
        );
    }
}
