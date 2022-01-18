<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Team;
use App\Player;
use App\User;
use App\Comment;
use Storage;

class CommentController extends Controller
{
    public function store(Comment $comment,Request $request )
    {
        $comment->movie_id = $request->movie_id;
        $comment->comment = $request->comment;
        //$comment->user_id = $request->user()->id;
        $comment->save();
        return redirect('/movies/' . $request->movie_id);
    }
}
