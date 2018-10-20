<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Styles -->
    </head>
    <body>
        <header>
            <nav class="navbar container-fluid bg-light">
                <div class="container">   
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link font-weight-normal" href="{{ route('home') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link font-weight-normal" href="{{ route('post.index') }}">Posts</a></li>
                        <li class="nav-item"><a class="nav-link font-weight-normal" href="{{ route('category.index') }}">Category</a></li>
                        <li class="nav-item"><a class="nav-link font-weight-normal" href="{{ route('tag.index') }}">Tag</a></li>
                        <li class="nav-item"><a class="nav-link font-weight-normal" href="{{ route('author.index') }}">User</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <section class="container-fluid">
                <div class="container">
                    @include('error.index')
                    @yield('content')
                </div>
            </section>
        </main>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>