<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<title>Ulubione</title>

<body>
    <?php foreach ($model as $item) : ?>
        <div class="card mb-3">
            <div class="card-header bg-primary">
                <h3 class="card-title text-white">
                    <?php echo $item['title']; ?>
                </h3>
                <p class="card-text text-white">
                    <?php echo $item['name']; ?>
                </p>
                <p class="card-text text-white"><small>
                        <?php echo $item['position_level']; ?>
                    </small></p>
            </div>
            <div class="card-body">
                <p class="card-text">
                    <span>Data zakonczenia: </span>
                    <?php echo $item['expire_date']; ?>

                </p>
                <a class="btn btn-primary text-center m-3" href="<?php echo ROOT_URL; ?>ads/announcement/<?php echo $item['announcement_id'] ?>">Zobacz</a>
            </div>
        </div>
    <?php endforeach; ?>
</body>