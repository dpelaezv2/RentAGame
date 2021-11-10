<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\VideoGAmeResource;
use App\Http\Controllers\Controller;
use App\Models\Videogame;

class VideoGameApi extends Controller
{
    public function index()
    {
        return VideoGameResource::collection(Videogame::all());
    }

    public function show($id)
    {
        return new VideoGameResource(Videogame::findOrFail($id));
    }
}
