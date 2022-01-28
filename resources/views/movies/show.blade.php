<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Baseball Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        
    </head>
    <body> 
    <header>
        <div class=" bg-dark">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <div class="container">    
                    <a class="navbar-brand " href="{{ url('/') }}">
                        Baseball Movie
                    </a>
         　　　        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ">
                            <a class="nav-link text-white" href="/movies/create">Movie Create <span class="sr-only">(current)</span></a>
                            @if ($user_id == $movie->user_id)
                                <a class="nav-link text-white" href="/movies/{{ $movie->id }}/edit">Movie Edit</a>
                            @endif
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-content">
                        <span class="navbar-toggler-icon"></span>
                    </button> 
                </div>
            </nav> 
        </div>
    </header>
    <div class="text-center mt-5 ">
        <div class="mb-4">
            <h1>{{ $movie->description }}</h1>
        </div>
        <video src="{{ $movie->movie}}" controls ></video>
        <h5 class="text-black-50">VS {{ $movie->team->teamname }}　　{{ $movie->match_day }}　　選手名：{{ $movie->player->name }}　背番号：{{ $movie->player->number }}</h5>
    </div>
    
    
        <div class="ml-4">
             <div class="border col-5 ">
                <br>
                    <h3>コメント欄</h3>
                <br>
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <form method="POST" action="/comments">
                                @csrf
                                <div>
        		                    <label for="name">表示名</label>
        		                    <input type="text" name="name" value="" class="form-control">
        	                    </div>
        	                    <label for="comment">コメント</label>
        	                    <div class="form-floating">
                                    <textarea name="comment" class="form-control  " placeholder="コメントを書き込んで！" id="floatingTextarea2" ></textarea>
                                </div>
        	                    <input type="hidden" value="{{$movie->id}}" name="movie_id">
                                <input class="btn btn-dark mt-2" type="submit" name="btn_submit" value="書き込む">
        	                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mt-4 ml-1 mb-5">
            <div class="col-md">      
                <article>
                    @foreach ($comments as $comment)
                        <div class="border-top border-dark ">
                        <div class="info">
                        <p><h5>{{$comment->name}}　　{{$comment->created_at}}</h5></p>
                        </div>
                        <p>{{$comment->comment}}</p>
                        </div> 
                    @endforeach
                </article>
            </div> 
        </div>     
    
    </body>
</html>
