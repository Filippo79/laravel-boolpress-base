<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <form  action="{{route('posts.store')}}" method="POST">
            @csrf
            @method('POST')
            <div class="">
                <label for="title">Titolo</label>
                <input type="text" name="title" placeholder="Inserisci il Testo">
            </div>
            <div class="">
                <label for="title">Autore</label>
                <input type="text" name="author" placeholder="Inserisci autore">
            </div>
            <div>
              <label for="title">Testo</label>
              <textarea name="text" cols="30" rows="10" placeholder="Inserisci il testo"></textarea>
            </div>
            <div>
              <label for="title">Immagine</label>
              <input type="text" placeholder="Inserisci il path" name="img">
            </div>
            <div>
              <label for="not-published">Non Pubblicato</label>
              <input type="radio" id="not-published" name="published" value="0">
              <label for="published">Pubblicato</label>
              <input type="radio" id="published" name="published" value="1">
            </div>
            <div>
                <label for="title">Data</label>
                <input type="date" placeholder="Inserisci la data" name="data">
            </div>
            <div>
              <input type="submit" value="Salva">
            </div>
        </form>
    </body>
</html>
