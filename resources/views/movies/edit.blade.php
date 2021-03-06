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
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse " id="navbar-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <div class="collapse navbar-collapse " id="navbar-content">
                                        <div class="navbar-nav ">
                                            <a class="nav-link text-white" href="/movies/create">Movie Create <span class="sr-only">(current)</span></a>
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
        <div class="mt-3">
            <form method="post" action="/movies/{{$movie->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">動画説明</p>
                            </div>
                            <div class="col-md-6">
                                <textarea rows="4" cols="50" name="description" type="text" class="form-control">{{ $movie->description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">相手チーム名</p>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="teamname" value="{{$movie->team->teamname}}">  
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">試合日</p>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="date" name="match_day" value="{{$movie->match_day}}">  
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">選手名</p>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="player" value="{{$movie->player->name}}">   
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">背番号</p>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="number"name="number" value="{{$movie->player->number}}">    
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">動画</p>
                            </div>
                            <div class="col-md-6">
                                <input type="file" accept="video/" name="movie" class="form-control-file">  
                                <video class="mt-3"src="{{ $movie->movie}}" width="360" height="270"controls></video>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">サムネイル画像</p>
                            </div>
                            <div class="col-md-6">
                                <input id="input" type="file" accept=" image/jpg" name="image" class="form-control-file">
                                <img class=""src="{{ $movie->image }}" >
                            </div>
                        </div>
                    </div>  
                </div>
                <p class="text-center">
                    <button type="submit" class="btn btn-outline-dark">　　保存　　</button>
                </p>
            </form>
            
            <div class="text-center">
                <form action="/movies/{{ $movie->id }}" id="form_{{ $movie->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button  type="submit"class="text-center btn btn-outline-dark">この投稿を削除する</button>
                </form>
            </div>
        </div>
    </body>
</html>
