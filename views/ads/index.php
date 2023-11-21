<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div class="container bg-light">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-3 bg-light text-center">
            <h1>Search</h1>
            <form>
                <div class="mb-3">
                    <label for="PositionName" class="form-label">Nazwa stanowiska</label>
                    <input type="text" class="form-control" id="PositionName" placeholder="Wpisz Slowa kluczowe">
                </div>
                <div class="mb-3">
                    <label for="Category" class="form-label">Kategoria</label>
                    <select class="form-select" id="Category">
                        <option value="" selected>Wybierz kategorię</option>
                        <option value="it">Informatyka</option>
                        <option value="finanse">Finanse</option>
                        <option value="sprzedaz">Sprzedaż</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Localization" class="form-label">Lokalizacja</label>
                    <input type="text" class="form-control" id="Localization" placeholder="Wpisz lokalizację">
                </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-3 bg-light text-center">
            <div class="mb-3">
                <label for="PositionLevel" class="form-label">Pozycja</label>
                <select class="form-select" id="PositionLevel">
                    <option value="" selected>Wybierz pozycje</option>
                    <option value="Praktykant">Praktykant</option>
                    <option value="Szef">Szef</option>
                    <option value="Zastepca">Zastepca</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ContractType" class="form-label">Typ umowy</label>
                <select class="form-select" id="ContractType">
                    <option value="" selected>Wybierz rodzaj umowy</option>
                    <option value="Praktykant">Umowa o pracę</option>
                    <option value="Szef">Umowa o zlecenie</option>
                    <option value="Zastepca">Umowa o dzieło</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="WorkingDimensions" class="form-label">Wymiar pracy</label>
                <select class="form-select" id="WorkingDimensions">
                    <option value="" selected>Wybierz wymiar pracy</option>
                    <option value="Praktykant">Część etatu</option>
                    <option value="Szef">Cały etat</option>
                    <option value="Zastepca">Dodatkowa</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="WorkingType" class="form-label">Typ pracy</label>
                <select class="form-select" id="WorkingType">
                    <option value="" selected>Wybierz typ pracy</option>
                    <option value="Praktykant">Zdalna</option>
                    <option value="Szef">Stacjonarna</option>
                    <option value="Zastepca">Mobilna</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-search"></i> Wyszukaj
            </button>
            </form>
        </div>
    </div>
</div>

<?php foreach ($model as $item): ?>
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
            <a class="btn	btn-primary	text-center m-3" href="<?php
            echo ROOT_URL; ?>ads/announcement">Zobacz</a>
        </div>
    </div>
<?php endforeach; ?>