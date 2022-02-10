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
                        <a class="navbar-brand col-2" href="{{ url('/') }}">
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
                                        </div>
                                    </div>
                                </li>
             　              </ul>　　     
                        </div>
                    </div>    
                </nav> 
            </div>
        </header>
        <div class="mt-5">
                <div class="col-md-6 mb-3">
                    <input id="input" type="file" accept="video/" name="movie" class="form-control-file"> 
                </div>
                <div class="col-md-6 mb-3">
                    <video id="video" width="416" height="282" controls></video>
                    <h5>好きなタイミングまで動画を動かしてください</h5>
                    <svg id="svg"  width="416" height="282" xmlns="http://www.w3.org/2000/svg">
                        <image  id="image" width="416" height="282" href="" />
                        <g id="g" />
                    </svg>
                      
                </div>
                <div class="col-md-6">
                <button  id="button" >ダウンロード</button>
                </div>
        </div>
        
       
        
        <script>
        input.onchange   = event => video.src = URL.createObjectURL(input.files[0])
        video.onpause    = event => image.setAttribute('href', toDataURL(video))
        video.onseeked   = event => image.setAttribute('href', toDataURL(video))
        
        
        button.onclick = async function (event){
            const a    = document.createElement('a')
            a.href     = await toJPG(svg)
            a.download = 'thumbnail.jpg'
            a.click()
        }
        
        
        function toDataURL(target, type){
            const canvas  = document.createElement('canvas')
            canvas.width  = target.width
            canvas.height = target.height
            canvas.getContext('2d').drawImage(target, 0, 0, target.width, target.height)
        
            return canvas.toDataURL(type)
        }
        
        async function toImage(file, width, height){
            const img = new Image(width, height)
            img.src   = URL.createObjectURL(file)
            await img.decode()
        
            return img
        }
        
        async function toJPG(svg){
            const file = new Blob([svg.outerHTML], {type:'image/svg+xml'})
            const img  = await toImage(file, svg.width.baseVal.value, svg.height.baseVal.value)
        
            return toDataURL(img, 'image/jpg')
        }
        </script>                        
    </body>
</html>
