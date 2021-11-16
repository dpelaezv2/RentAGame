<?php 

namespace App\Util;

use App\Interfaces\RandomMovie;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class RandomLocalMovie implements randomMovie {
    public function random(){
        $randomNumber = (rand(1, 12));
        $link = "movietown-eafit.tk/api/movie/" . $randomNumber; 
        $movies = Http::get($link);
        $movie = json_decode($movies->body());
        $movie = $movie->data;
        return $movie;
    }
}
