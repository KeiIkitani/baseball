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
        <form method="post" action="/movie/show" enctype="multipart/form_date">
            @csrf
            <h3>相手チーム名</h3>
            <input type="text" name="teamname">
            <h3>試合日</h3>
            <input type="date" name="match_day">
            <h3>動画</h3>
            <input type="file" name="profile_movie" class="form-control-file">
            <h3>動画説明</h3>
            <textarea name="movie_description"></textarea>
            <input type="submit" value="store">
        </form>
        <div>[<a href="/movie">back</a>]</div>
    </body>
</html>
