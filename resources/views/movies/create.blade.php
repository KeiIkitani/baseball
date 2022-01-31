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
             　　   　 </div>    
                </nav> 
            </div>
        </header> 
        <div class="">
        <div class="mt-3">
            <form method="post" action="/movies" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">動画説明</p>
                            </div>
                            <div class="col-md-6">
                                <textarea rows="4" cols="50" name="description" type="text" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">相手チーム名</p>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="teamname">  
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">試合日</p>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="date" name="match_day">  
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">選手名</p>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="text" name="player">   
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-2">
                                <p class="text-center">背番号</p>
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" type="number"name="number">    
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
                            </div>
                        </div>
                    </div>
                <p class="text-center">
                    <button type="submit" class="btn btn-outline-dark">　　作成　　</button>
                </p>
            </form>
        </div></div>
    </body>
</html>
