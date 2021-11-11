<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\VideoGameResource;
use App\Http\Controllers\Controller;
use App\Models\VideoGame;

class VideoGameApi extends Controller
{
    public function index()
    {
        return VideoGameResource::collection(VideoGame::all());
    }

    public function show($id)
    {
        return new VideoGameResource(VideoGame::findOrFail($id));
    }
}
