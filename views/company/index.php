<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Profile Form</title>
</head>

<body>
    <div class="container mt-4">
        <h1>Firmy</h1>
        <?php
        ?>

        <!-- Add Category Section -->
        <form class="bg-light p-3 my-2" method="post" action="<?php echo ROOT_URL ?>company/add">
            <h2>Add Company</h2>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" placeholder="Company name"
                    aria-label="Company name">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="adress" placeholder="Address" aria-label="Address">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="localization_link" placeholder="Lokalizacja"
                    aria-label="Lokalizacja">
            </div>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="description" placeholder="Opis" aria-label="Opis">
            </div>
            <input class="btn btn-outline-secondary" type="submit" value="Dodaj" />
            <?php
            ?>
        </form>

        <!-- Delete Category Section -->
        <form class="bg-light p-3 my-2" method="post" action="<?php echo ROOT_URL ?>company/delete">
            <h2>Delete Company</h2>
            <select class="form-select mb-3" aria-label="Select company" name="company_id">
                <?php foreach ($model as $company): ?>
                    <option value="<?php echo $company['company_id'] ?>">
                        <?php echo $company['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <button class="btn btn-danger" type="submit">Usuń</button>
        </form>
        <?php
        ?>
    </div>
</body>