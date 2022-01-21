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
    　　<form action="/" method="get">
    　　      @csrf
            <input type="text" name="word" value="{{$word}}" placeholder="キーワードを入力">
            <!-- 検索フォームにキーワードを入れる -->
            <button type="submit">検索</button>
    　　</form>
    　　
    　　<a href="/movies/create">[プレー動画の作成]</a>

        @foreach ($teams as $team)
            @foreach ($team->movies as $movie)
                <a href='/movies/{{$movie->id}}'><h1>{{ $movie->description }}</h1></a>
                <h3>相手チーム：{{ $team->teamname }}　　対戦日：{{ $movie->match_day }}　　選手名：{{ $movie->player->name }}</h3>
            @endforeach    
        @endforeach
        
    </body>
</html>
