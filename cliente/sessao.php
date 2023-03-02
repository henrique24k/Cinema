<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/estilo.css">
    <link rel="icon" href="../assets/cinemark.png" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    </style>
    <title>Escolha seu Filme</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">
            <img class="logo" src="../assets/cinemark.png" width="40%" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="dropdown">
            <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">Ingressos
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="sessao.php">Sessões</a></li>
            </ul>
        </div>
        </ul>
        <span class="navbar-text">
            <a class="credenciais" href="">Login</a>/<a href="">Cadastro</a>
        </span>
    </nav>

    <br>
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="../assets/eye.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Fantastic Voyage</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                    <a href="fimCompra.php"><button type="button" class="btn btn-danger">Ver Poltronas Disponiveis</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../assets/star.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Star Wars</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                <a href="fimCompra.php"><button type="button" class="btn btn-danger">Ver Poltronas Disponiveis</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../assets/subways.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">The talkin of ...</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                    <a href="fimCompra.php"><button type="button" class="btn btn-danger">Ver Poltronas Disponiveis</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../assets/fileld.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Field of Dreams</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                    <a href="fimCompra.php"><button type="button" class="btn btn-danger">Ver Poltronas Disponiveis</button></a>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../assets/dumbo.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Dumbo</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
                    <a href="fimCompra.php"><button type="button" class="btn btn-danger">Ver Poltronas Disponiveis</button></a>
            </div>
        </div>
    </div>

    <div class="container">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3 ">
            <img src="../assets/cinemark.png" width="100">
                <p class="text-muted">&copy; 2022</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5>Section</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                </ul>
            </div>
        </footer>
    </div>

</body>
</html>
