<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Actor;
use App\Genres;
use App\Director;
use App\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // public function __construct($value='')
    // {
    //     $this->middleware('role:Admin')->only('detailfun');
    //     $this->middleware('role:User')->only('detailfun');
    // }
    public function indexfun()
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
        $directors=Director::all();
        $comments=Comment::all();
    	return view('frontend.master',compact('genres','actors','movies','directors','comments'));
    }
    public function detailfun($id)
    {
        $genre=Genres::find($id);
        $actor=Actor::find($id);
        $director=Director::find($id);
        $movie=Movie::find($id);
        $comments=Comment::all();
    	return view('frontend.movie_detail',compact('movie','genre','actor','director','comments'));
    }
    public function typefun($id)
    {
        $movies=Movie::all();
        $actors=Actor::all();
        $genre=Genres::find($id);
        return view('frontend.movie_type',compact('genre','movies','actors'));
    }
    public function celefun($id)
    {
        $actor=Actor::find($id);
        $genres=Genres::all();
        $movies=Movie::all();
        return view('frontend.cele',compact('movies','genres','actor'));
    }
    public function landingfun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
    	return view('frontend.landing',compact('movies','genres','actors'));
    }
    public function commingfun($id)
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movie=Movie::find($id);
    	return view('frontend.commingsoon',compact('movie','genres','actors'));
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
     public function helpfun($value='')
    {
        $actors=Actor::all();
        $genres=Genres::all();
        $movies=Movie::all();
        return view('frontend.help',compact('movies','genres','actors'));
    }
    public function search($value='')
    {
      $search_text=$_GET['query'];
      $movies=Movie::where('title','LIKE','%'.$search_text.'%')->get();
      return view('frontend.search',compact('movies'));
    }
    

}
