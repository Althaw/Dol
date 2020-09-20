<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\view;
use App\Genres;
use App\Actor;
use App\Movie;
use App\Director;

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
        $actors=Actor::take(10)->get();
        view::share('actors',$actors);
        $directors=Director::all();
        view::share('directors',$directors);
        $movies=Movie::all();
        view::share('movies',$movies);
    }
}
