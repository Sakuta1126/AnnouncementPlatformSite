<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogłoszenia</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2y5nZqVxgEX24KM3oamFOMQBSv8BJEH8yP4qU+l4U6j593kKhZqX6jwo9OKv5" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Ogłoszenia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">

                        <a class="nav-link" href="<?php echo ROOT_URL; ?>">Start</a>
                    </li>
                    <li>

                    </li>

                </ul>
                <img src="http://localhost/Sigmowo/images/Sigmowo.png" class="img-fluid" alt="...">

                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['is_logged_in'])): ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/profile">Witaj,
                                <?php echo $_SESSION['user_data']['login']; ?>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Wyloguj</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Zaloguj</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Zarejestruj</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 offset-md-0">
                <?php Messages::display(); ?>
                <?php require($view); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <footer class=" bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#">O nas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Kontakt</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6">
                        <p class="text-center">Copyright &copy; 2023</p>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>