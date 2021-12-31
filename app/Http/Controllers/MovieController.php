<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Team;
use Illuminate\Http\Request;

class MovieController extends Controller
{
        public function index(Movie $movie,Team $team)
    {
        return view('movies/index')->with(['movies' => $movie->get(),'teams' => $team->get()]);
    }
        public function show(Movie $movie)
    {
        return view('movies/show')->with(['movies' => $movie->get()]);
    }
        public function create( )
    {
        return view("movies/create");
    }
}
