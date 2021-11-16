<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\interfaces\RandomMovie;
use App\Util\RandomLocalMovie;

class MovieServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RandomMovie::class, function (){
            return new RandomLocalMovie();
        });
    }
}
