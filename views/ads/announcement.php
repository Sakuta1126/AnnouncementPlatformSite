<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<?php
$announcement = $model['announcement'];
$isFavourite = $model['is_favourite'];
?>
<div class="container-fluid">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 ">
        <h1>
            <?php echo $announcement['title'] ?>
        </h1>
    </div>
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 mb-3 bg-light">
            <h2 class="bi-briefcase"> Pozycja</h2>
            <p>
                <?php echo $announcement['position_name'] ?>
                <br><small>
                    <?php echo $announcement['position_level'] ?>
                </small>
            </p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 mb-3 bg-light">
            <h2 class="bi-cash-stack"> Zarobki</h2>
            <?php echo $announcement['sallary'] ?>PLN
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 mb-3 bg-light">
            <h2 class="bi-clipboard"> Typ umowy </h2>
            <?php echo $announcement['contract_type'] ?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 mb-3 bg-light">
            <h2 class="bi-clock"> Godziny pracy</h2>
            <?php echo $announcement['working_hours'] ?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 mb-3 bg-light">
            <h2 class="bi-bicycle"> Typ pracy </h2>
            <?php echo $announcement['work_type'] ?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 mb-3 bg-light">
            <h2 class="bi-brightness-alt-high"> Czas pracy</h2>
            <?php echo $announcement['working_time'] ?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 mb-3 bg-light">
            <h2 class="bi-calendar-x"> Data wygasniecia</h2>
            <?php echo $announcement['expire_date'] ?>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 mb-3 bg-light">
            <h2 class="bi-bookmark-check-fill"> Obowiazki</h2>
            <?php echo $announcement['duties'] ?>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 mb-3 text-center">
            <h1 class="bi bi-gift-fill"> Benefity</h1>
            <?php echo $announcement['benefits'] ?>
        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 mb-3 text-center">
            <h1 class="bi-check-circle-fill">
                Wymagania
            </h1>
            <?php echo $announcement['requirements'] ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d71836.7075050624!2d92.64083862304685!3d55.76028954034616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5cd7a378d5750337%3A0xe57c19ec9271eb16!2z0JrRgNCw0YHQvdC-0Y_RgNGB0LrQuNC1INCh0YLQvtC70LHRiw!5e0!3m2!1spl!2spl!4v1700166255843!5m2!1spl!2spl" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <a class="btn	btn-primary	text-center" href="<?php
                                                                echo ROOT_URL . "applied/confirm/" . $announcement['announcement_id']; ?>">Apply</a>
            <?php if ($isFavourite == true) : ?>
                <a class="btn	btn-primary	text-center" href="<?php
                                                                    echo ROOT_URL . "favourites/delete/" . $announcement['announcement_id']; ?>">Usuń z ulubionych</a>
            <?php else : ?>
                <a class="btn	btn-primary	text-center" href="<?php
                                                                    echo ROOT_URL . "favourites/add/" . $announcement['announcement_id']; ?>">Dodaj do ulubionych</a>
            <?php endif; ?>

        </div>
    </div>

</div>