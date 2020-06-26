<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Home</title>
    <link rel="stylesheet" href="{{ mix('css/dashboard/style.css') }}">
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark header-site">
        <div class="container">
            <a href="#" class="navbar-brand">Dashboard</a>

            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link ml-2">Tabela de Dados</a>
                    <a href="#" class="nav-item nav-link ml-2 active">Abaixo Assinado</a>
                </div>

                <a href="" class="ml-auto text-white button-sair">Sair</a>
            </div>
        </div>        
    </nav>

    <div class="jumbotron jumbotron-fluid title-standard">
        <div class="container">
            <h1 class="display-4">Abaixo Assinado</h1>
            <p class="lead">Sessão dedicada para editar a página do site.</p>
        </div>
    </div>

    @yield('content-page')

    
    <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/bootstrap.bundle.js') }}"></script>
</body>
</html>