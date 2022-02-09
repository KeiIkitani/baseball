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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </head>
    <body>
        <header>    
            <div class=" bg-dark">
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
                    <div class="container">    
                        <form class="form-inline " action="/" method="get">  
                                    @csrf
                                    <!--検索フォームにキーワードを入れる -->
                                    <input class="form-control mr-1 w-75 " type="text" name="word" value="{{$word}}" placeholder="キーワードを入力">
                                    <button class="btn btn-outline-light ">検索</button>
                                </form>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbar-content">
                           
                            <ul class="navbar-nav">
                                
                                <li class="nav-item dropdown">
                                    <div class="collapse navbar-collapse " id="navbar-content">
                                        <div class="navbar-nav ">
                                            <a class="nav-link text-white " href="/movies/create">Movie Create <span class="sr-only">(current)</span></a>
                                            <a class="nav-link text-white" href="/movies/image">Image Create <span class="sr-only">(current)</span></a>
                                        </div>
                                    </div>
                                </li>
             　              </ul>　　     
                        </div>
                    </div>    
                </nav> 
            </div>
        </header>
    
        <div class="container">
            <div class="row">
                @foreach ($teams as $team)
                    @foreach ($team->movies as $movie)
                        <div class="col-md-4 mb-2 mt-4">
                            <div class="card  border-dark bg-white">
                                <img class=""src="{{ $movie->image }}" >
                                <div class="card-body">
                                    
                                    <h3 class="card-title">{{ $movie->description }}</h3>
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
