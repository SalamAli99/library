<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Library Managment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    
    <header class=" bg-light " >

        @if (Route::has('login'))
            <nav class="d-flex justify-content-center ">
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-warning ">
                        Dashboard
                    </a>
                @else
                    <a class="btn btn-primary p-3 m-3 " href="{{ route('login') }}"class="link-info">                     
                           Log in
                    </a>

                    @if (Route::has('register'))
                        <a class="btn btn-secondary p-3 m-3" href="{{ route('register') }}">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

            <div class="container bg-warning">
              @yield('content')
            </div>

    <footer class="fixed-bottom bg-dark text-white p-3">
        this library managment system made by salam jalal ali !!
    </footer>
    </div>
    </div>
    </div>
</body>

</html>
