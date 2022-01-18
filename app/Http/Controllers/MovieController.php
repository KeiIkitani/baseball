<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Team;
use App\Player;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Storage;

class MovieController extends Controller
{
        public function index(Request $request,Movie $movie,Team $team,Player $player)
    {
        $word=$request->input('word');
        if($word){
            
            $teams = Team::whereHas('movies', function($query) use($word){
            $query->where('description','LIKE',"%{$word}%")
            ->orwhere('teamname','LIKE',"%{$word}%")
            ->orwhere('match_day','LIKE',"%{$word}%")
            ;
            })->get();
            // $teams = Team::whereHas('players', function($query) use($word){
            // $query->where('name','LIKE',"%{$word}%");
            // })->get();
            
        }
        else{
            $teams=$team->get();
        }
        return view('movies/index')->with(['teams' => $teams,'word' => $word]);
    }
        public function show(Movie $movie)
    {
        return view('movies/show')->with(['movie' => $movie,'comments'=> $movie->comments]);
    }
        public function create()
    {
        return view('movies/create');
    }
        public function store(Movie $movie,Team $team,Player $player,Request $request )
    {
        $team->teamname = $request->teamname;
        $movie->match_day = $request->match_day;
        $movie->description = $request->description;
        $player->name=$request->player;
        $player->number=$request->number;
        
        //s3アップロード開始
        $file = $request->file('movie');
        // バケットの`myprefix`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('baseball', $file, 'public');
        // アップロードした画像のフルパスを取得
        $movie->movie = Storage::disk('s3')->url($path);
        
        $team->save();
        $movie->team_id=$team->id; 
        
        $player->save();
        $movie->player_id=$player->id;
        $movie->save();
        
        return redirect('/');
    }
    
    
}
