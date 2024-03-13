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

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Zaloguj się</h3>
    </div>
    <div class="card-body text-center">
      <form method="post" action="<?php echo ROOT_URL; ?>users/authenticate">
        <div class="mb-3">
          <label for="email" class="form-label h3">Login</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label h3">Hasło</label>
          <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Zaloguj się</button>
      </form>
    </div>
  </div>
</body>

</html>