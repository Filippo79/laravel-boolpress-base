<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-12">
            <table class="table">
                <thead>
                    <th>Titolo</th>
                    <th>Autore</th>
                    <th colspan="3">Azioni</th>
                </thead>
                <tbody>
                    @foreach ($posts as  $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>Scritto da {{$post->author}}</td>
                            <td><a href="{{route('posts.edit', $post->id)}}">Modifica</a></td>
                            <td><a href="{{route('posts.show', $post->slug)}}">Visualizza</a></td>
                            <td>Elimina</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>
</body>
</html>
