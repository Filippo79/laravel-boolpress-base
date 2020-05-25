<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <title>@yield('title')Boolpress</title>
</head>
<body>
    <header>
        @include('partials.header')
        @yield('header')
        @if (session('status'))
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

    </header>

    <main>
        @yield('main')

    </main>

    <footer>
        @yield('footer')
    </footer>

</body>
</head>
</html>
