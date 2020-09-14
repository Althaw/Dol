<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Actor;
use App\Genres;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function indexfun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
    	return view('frontend.master',compact('genres','actors','movies'));
    }
    public function detailfun($id)
    {
        $genres=Genres::all();
        $actors=Actor::all();
        $movie=Movie::find($id);
    	return view('frontend.movie_detail',compact('movie','genres','actors'));
    }
    public function typefun($id)
    {
        $movies=Movie::all();
        $actors=Actor::all();
        $genre=Genres::find($id);
        return view('frontend.movie_type',compact('genre','movies','actors'));
    }
    public function celefun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
        return view('frontend.cele',compact('movies','genres','actors'));
    }
    public function landingfun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
    	return view('frontend.landing',compact('movies','genres','actors'));
    }
    public function commingfun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
    	return view('frontend.commingsoon',compact('movies','genres','actors'));
    }
    public function movieFun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
        return view ('frontend.movie',compact('movies','actors','genres'));
    } 
    public function loginfun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
        return view('frontend.login',compact('movies','genres','actors'));
    }
    public function signupfun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
        return view('frontend.register',compact('movies','genres','actors'));
    }
    

}
