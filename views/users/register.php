<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="card bg-light">
        <div class="card-header text-dark">
            <h3 class="card-title">Zakładanie konta</h3>
        </div>
        <div class="card-body">
            <form method="post" action="<?php echo ROOT_URL;
            ?>users/createAccount">
                <div class="mb-3">
                    <label for="name" class="form-label">Imię</label>
                    <input type="text" class="form-control-sm" name="name" id="name">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Hasło</label>
                    <input type="password" class="form-control-sm" name="password" id="password">
                </div>
                <button type="submit" class="btn btn-primary mb-4" name="submit">Zakładam konto</button>
            </form>
        </div>
    </div>
</body>

</html>