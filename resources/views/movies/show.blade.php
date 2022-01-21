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
        <h1>{{ $movie->description }}</h1>
        <video src="{{ $movie->movie}}" controls></video>
        <h3>VS {{ $movie->team->teamname }}      {{ $movie->match_day }}</h3>
        <h3>選手名　{{ $movie->player->name }} 背番号　{{ $movie->player->number }}</h3>
    
        
        <h3>コメント欄</h3>
        <form method="POST" action="/comments">
            @csrf
	        <div>
	            <input type="hidden" value="{{$movie->id}}" name="movie_id">
		        <label for="comment">コメント</label>
		        <textarea id="comment" name="comment"></textarea>
	        </div>
	        <input type="submit" name="btn_submit" value="書き込む">
        </form>
        
        <article>
            @foreach ($comments as $comment)
                <div class="info">
                {{--<h2>{{$comment->user->name}}</h2>--}}
                <time><?php echo date('Y年m月d日 H:i', strtotime($comment['created_at'])); ?></time>
                </div>
                <p>{{$comment->comment}}</p>
            @endforeach
        </article>
        
        <div>[<a href="/movies/create">プレー動画の作成</a>]</div>
        
        <p class="edit">[<a href="/movies/{{ $movie->id }}/edit">プレー動画の編集</a>]</p>
        <form action="/movies/{{ $movie->id }}" id="form_{{ $movie->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">プレー動画の削除</button> 
        </form>
        <div>[<a href="/">戻る</a>]</div> 
    </body>
</html>
