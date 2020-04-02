<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Testes</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col xs-12">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Unruh</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-item nav-link" href="/">Home</a>
                            <a class="nav-item nav-link" href="/quem-somos">Quem Somos</a>
                            <a class="nav-item nav-link" href="/blog">Blog</a>
                            <a class="nav-item nav-link" href="/contato">Contato</a>
                            <a class="nav-item nav-link" href="/dashboard">Dashboard</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        @yield('content')
    </div>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
