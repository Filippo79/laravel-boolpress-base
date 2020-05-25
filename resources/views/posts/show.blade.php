<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Show</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>{{$post->title}}</h2>
                    <small>Scritto da {{$post->author}}</small>
                    <div class="text">
                        {!!$post->text!!}
                    </div>
                    <div class="img">
                        <img src="{{$post->img}}" alt="{{$post->title}}">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
