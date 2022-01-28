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
                
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <form class="form-inline" action="/" method="get">  
                        @csrf
                        <!--検索フォームにキーワードを入れる -->
                        <input class="form-control mr-1 w-75" type="text" name="word" value="{{$word}}" placeholder="キーワードを入力">
                        <button class="btn btn-outline-light ">検索</button>
                    </form>
           
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbar-content">
                        <span class="navbar-toggler-icon"></span>
                    </button> 
                </div>
            </nav> 
        </div>
    </header>
    
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                    @foreach ($team->movies as $movie)
                        <div class="col-md-4 mb-2 mt-4">
                            <div class="card text-center border-dark bg-white">
                                <div class="card-body">
                                    <h1 class="card-title">{{ $movie->description }}</h1>
                                    <p class="card-text">
                                        <div>相手チーム：{{ $team->teamname }}</div>
                                        <div>対戦日：{{ $movie->match_day }}</div>
                                        <div>選手名：{{ $movie->player->name }}</div>
                                    </p>
                                    <a href='/movies/{{$movie->id}} ' class="btn btn-dark">read more</a>
                                </div>
                            </div>
                        </div>
                    @endforeach    
                @endforeach
            </div>
        </div>
    </body>
</html>
