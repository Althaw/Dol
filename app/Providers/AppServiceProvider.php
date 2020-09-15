<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\view;
use App\Genres;
use App\Actor;
use App\Movie;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $genres=Genres::all();
        view::share('genres',$genres);
        $actors=Actor::all();
        view::share('actors',$actors);
        $movies=Movie::all();
        view::share('movies',$movies);
    }
}
