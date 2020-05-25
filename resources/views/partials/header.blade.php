<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('posts.index')}}">Articoli</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('photos.index')}}">Foto</a></li>
                </ul>
                <td>
                    <a class="btn btn-outline-success btn-lg" href="{{route('photos.create')}}">Inserisci</a>
                </td>
            </nav>
        </div>
    </div>
</div>
