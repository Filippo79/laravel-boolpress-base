@extends('layouts.layout');

@section('title')
    {{$title}}
@endsection

@section('header')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{$title}}</h2>
            </div>
        </div>
    </div>

@endsection

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="" action="{{route('photos.update', $photo->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label form="title">Titolo</label>
                           <input class="form-control" type="text" name="title" value="{{$photo->title}}">
                           @error ('title')
                               <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                    </div>
                    <div class="form-group">
                        <label form="description">Descrizione</label>
                           <textarea class="form-control" name="description" rows="10" cols="30">{{$photo->description}}</textarea>
                           @error ('description')
                               <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                    </div>
                    <div class="form-group">
                        <label form="path">Path</label>
                           <input class="form-control" type="text" name="path" value="{{$photo->path}}">
                           @error ('path')
                               <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                    </div>
                    <input class="btn btn-warning"type="submit"  value="Salva">
                </form>

            </div>
        </div>
    </div>

@endsection

@section('footer')

@endsection
