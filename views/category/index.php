<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div class="container mt-4">
    <h1>Category</h1>
    <?php
    ?>

    <!-- Add Category Section -->
    <form class="bg-light p-3 my-2" method="post" action="<?php echo ROOT_URL ?>category/add">
        <h2>Add Category</h2>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="name" placeholder="Category name" aria-label="Category name">
            <input class="btn btn-outline-secondary" type="submit" value="Dodaj" />
        </div>
        <?php
        ?>
    </form>

    <!-- Delete Category Section -->
    <form class="bg-light p-3 my-2" method="post" action="<?php echo ROOT_URL ?>category/delete">
        <h2>Delete Category</h2>
        <select class="form-select mb-3" aria-label="Select category" name="category_id">
            <?php foreach ($model as $category): ?>
                <option value="<?php echo $category['category_id'] ?>">
                    <?php echo $category['name']; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button class="btn btn-danger" type="submit">Usuń</button>
    </form>
    <?php
    ?>
</div>