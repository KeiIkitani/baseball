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
   
        <form method="post" action="/movies" enctype="multipart/form-data">
            @csrf
            <h3>動画説明</h3>
            <textarea name="description"></textarea>
            <h3>相手チーム名</h3>
            <input type="text" name="teamname">
            <h3>試合日</h3>
            <input type="date" name="match_day">
            <h3>選手名</h3>
            <input type="text" name="player">
            <h3>背番号</h3>
            <input type="number" name="number">
            <h3>動画</h3>
            <input type="file" accept="video/" name="movie" class="form-control-file">
            
            <input type="submit" value="作成">
        </form>
        <div>[<a href="/">戻る</a>]</div>
    </body>
</html>
