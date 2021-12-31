<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Baseball Movies</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        
    </head>
    <body> 
        <a href="/movies/create">プレイ動画の作成</a>
        @foreach ($teams as $team)
        <h1>{{ $team->teamname }}</h1>
        @endforeach
        
        @foreach ($movies as $movie)
        <a href='/movies/{{$movie->id}}'><h3>{{ $movie->match_day }}</h3></a>
        @endforeach
        
    </body>
</html>
