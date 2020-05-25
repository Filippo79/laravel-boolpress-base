<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Create</title>
    </head>
    <body>
        <form  action="{{route('posts.update', $post->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="">
                <label for="title">Titolo</label>
                <input type="text" name="title" value="{{ (!empty(old('title') )) ? old('title') : $post->title}}" placeholder="Inserisci il Testo">
                @error('title')
                    <spam class="alert alert-danger">{{ $message }}</spam>
                 @enderror
            </div>
            <div class="">
                <label for="title">Autore</label>
                <input type="text" name="author"value="{{ old('author') }}" placeholder="Inserisci autore">
                @error('author')
                    <spam class="alert alert-danger">{{ $message }}</spam>
                 @enderror
            </div>
            <div>
              <label for="title">Testo</label>
              <textarea name="text"cols="30" rows="10" placeholder="Inserisci il testo"{{ (!empty(old('text'))) ? old('text') : 'Inserisci un testo'}}></textarea>
              @error('text')
                  <spam class="alert alert-danger">{{ $message }}</spam>
               @enderror
            </div>
            <div>
              <label for="title">Immagine</label>
              <input type="text" placeholder="Inserisci il path" name="img"value="{{ old('img') }}">
              @error('img')
                  <spam class="alert alert-danger">{{ $message }}</spam>
               @enderror
            </div>
            <div>
              <label for="not-published">Non Pubblicato</label>
              <input type="radio" id="not-published" name="published" value="0"{{ (old('published') == 0) ? 'checked' : ''}}>
              <label for="published">Pubblicato</label>
              <input type="radio" id="published" name="published" value="1"{{ (old('published') == 1) ? 'checked' : ''}}>
            </div>
            <div>
                <label for="title">Data</label>
                <input type="date" placeholder="Inserisci la data" name="data">
                @error('data')
                    <spam class="alert alert-danger">{{ $message }}</spam>
                 @enderror
            </div>
            <div>
              <input type="submit" value="Salva">
            </div>
            {{-- <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
             </div>
             <div class="form-group row">
               <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
               <div class="col-sm-10">
                 <input type="password" class="form-control" id="inputPassword" placeholder="Password">
               </div>
             </div> --}}
        </form>
    </body>
</html>
