<?php

namespace App\Http\Controllers;

use App\Movie;
use App\Team;
use App\Player;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
        public function index(Request $request,Movie $movie,Team $team,Player $player)
    {
        $word=$request->input('word');
        if($word){
            
            $teams = Team::whereHas('movies', function(Builder $query) use($word){
            $query->where('description','LIKE',"%{$word}%")
            ->orwhere('teamname','LIKE',"%{$word}%")
            ->orwhere('match_day','LIKE',"%{$word}%");
            })->orwhereHas('players', function(Builder $query) use($word){
                $query->where('name','LIKE',"%{$word}%");
            })->get();
            
            
        }
        else{
            $teams=$team->get();
        }
        return view('movies/index')->with(['teams' => $teams,'word' => $word]);
    }
        public function show(Movie $movie)
    {
        $user_id = Auth::id();
        return view('movies/show')->with(['movie' => $movie,'comments'=> $movie->comments,'user_id'=>$user_id]);
    }
        public function create()
    {
        return view('movies/create');
    }
        public function image()
    {
        return view('movies/image');
    }
        public function store(Movie $movie,Team $team,Player $player,User $user,Request $request )
    {
        $team->teamname = $request->teamname;
        $movie->match_day = $request->match_day;
        $movie->description = $request->description;
        $player->name=$request->player;
        $player->number=$request->number;
        $movie->image=$request->image;
        
        //s3アップロード開始
        $file = $request->file('movie');
        // バケットの`baseball`フォルダへアップロード
        $path = Storage::disk('s3')->putFile('baseball', $file, 'public');
        // アップロードした動画のフルパスを取得
        $movie->movie = Storage::disk('s3')->url($path);
        
        $file = $request->file('image');
        $path = Storage::disk('s3')->putFile('baseball', $file, 'public');
        $movie->image = Storage::disk('s3')->url($path);
        
        $team->save();
        $player->team_id=$team->id;
        $movie->team_id=$team->id; 
        
        $player->save();
        $movie->player_id=$player->id;
        
        $movie->user_id=auth()->user()->id;
        $movie->save();
        
        return redirect('/');
    }
        public function edit(Movie $movie)
    {
        return view('movies/edit')->with(['movie' => $movie]);
    }
        public function update(Request $request, Movie $movie,Team $team,Player $player)
    {
        $team->teamname = $request->teamname;
        $movie->match_day = $request->match_day;
        $movie->description = $request->description;
        $player->name=$request->player;
        $player->number=$request->number;
        $movie->image=$request->image;
        
        $file = $request->file('movie');
        $path = Storage::disk('s3')->putFile('baseball', $file, 'public');
        $movie->movie = Storage::disk('s3')->url($path);
        
        $file = $request->file('image');
        $path = Storage::disk('s3')->putFile('baseball', $file, 'public');
        $movie->image = Storage::disk('s3')->url($path);
        
        $team->save();
        $player->team_id=$team->id;
        $movie->team_id=$team->id; 
        
        $player->save();
        $movie->player_id=$player->id;
        $movie->save();

        return redirect('/movies/' . $movie->id);
    }
        public function delete(Movie $movie)
    {
        $movie->delete();
        return redirect('/');
    }
        
    
}
