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
        <h1>{{ $movie->match_day }}{{ $team->teamname }}</h1>
        <video src="/movies/{{$movie->id}}/create" controls></video>
        <div>
            <h3>コメント欄</h3>
            <h4>{{ $user->name }}</h4>
            <textarea name="content" placeholder="コメント欄"></textarea>
        </div> 
        <a href="/movies/create">プレイ動画の作成</a>

        
        
    </body>
</html>
