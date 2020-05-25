
@extends('layouts.layout')
@section('title')

@endsection
@section('header')
    <div class="container">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>

@endsection
@section('main')
    <main>
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

    </main>
@endsection
