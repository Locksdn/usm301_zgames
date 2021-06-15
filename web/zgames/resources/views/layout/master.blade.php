<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.css">
    <title>@yield('title')</title>
</head>
<body>
    <header class="bg-primary mb-3">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ZGames</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="registrar_juego" class="nav-link">
                            Registrar Juego
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="registrar_consola" class="nav-link">
                            Registrar Consola
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ver_consolas" class="nav-link">
                            Ver Consolas
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="ver_juegos" class="nav-link">
                            Ver Juegos
                        </a>
                    </li>
                </ul>
            </div>


        </div>
        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="card bg-seconday col">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    @yield("javascript")
</footer>
</html>