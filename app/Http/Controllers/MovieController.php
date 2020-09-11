<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.movies.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        // Validation
        $request->validate([
            //form input name
            "title"=>'required',
            "photo"=>'required',
            "link"=>'required',
            "star"=>'required',
            "point"=>'required',
            "quality"=>'required',
            "size"=>'required',
            "review"=>'required',
            "year"=>'required',
            "time"=>'required',
            "country"=>'required',
            "rating"=>'required'

        ]);
            
        //If include file , upload file
        $imageName = time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/movieimg'),$imageName);
            $path = 'backend/movieimg/'.$imageName;
        //Data insert
            $movie = new Movie;
            //database column=input name
            $movie->title=$request->title;
            $movie->photo=$path;
            $movie->link=$request->link;
            $movie->stars=$request->star;
            $movie->good_point=$request->point;
            $movie->quality=$request->quality;
            $movie->size=$request->size;
            $movie->review=$request->review;
            $movie->release_year=$request->year;
            $movie->run_time=$request->time;
            $movie->release_country=$request->country;
            $movie->rating=$request->rating;
            $movie->save();

        //redirect
            return redirect()->route('movies.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('backend.movies.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {
        // Validation
        $request->validate([
            //form input name
            "title"=>'required',
            "photo"=>'required',
            "link"=>'required',
            "star"=>'required',
            "point"=>'required',
            "quality"=>'required',
            "size"=>'required',
            "review"=>'required',
            "year"=>'required',
            "time"=>'required',
            "country"=>'required',
            "rating"=>'required'

        ]);
            
         //file upload , if data
        if($request->hasFile('photo')){
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/movieimg'),$imageName);
            $path = 'backend/movieimg/'.$imageName;

        }else{
            $path=$request->oldphoto;
        }

        //Data insert
            $movie = new Movie;
            //database column=input name
            $movie->title=$request->title;
            $movie->photo=$path;
            $movie->link=$request->link;
            $movie->stars=$request->star;
            $movie->good_point=$request->point;
            $movie->quality=$request->quality;
            $movie->size=$request->size;
            $movie->review=$request->review;
            $movie->release_year=$request->year;
            $movie->run_time=$request->time;
            $movie->release_country=$request->country;
            $movie->rating=$request->rating;
            $movie->save();

        //redirect
            return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
