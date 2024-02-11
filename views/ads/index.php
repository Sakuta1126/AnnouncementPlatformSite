<?php
$rows = $model['rows'];
$post = $model['post'];
$categories = $model['categories'];
?>
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
            <form method="post" action="<?php echo ROOT_URL; ?>ads">
                <div class="mb-3">
                    <label for="PositionName" class="form-label">Nazwa stanowiska</label>
                    <input type="text" class="form-control" id="PositionName" name="text"
                        placeholder="Wpisz Slowa kluczowe"
                        value="<?php echo (isset($post['text']) === true) ? $post['text'] : ""; ?>">
                </div>
                <div class="mb-3">
                    <label for="Category" class="form-label">Kategoria</label>
                    <select class="form-select" id="category_id" name="category_id">
                        <option value="" selected>Wybierz kategorię</option>
                        <?php foreach ($categories as $category): ?>
                            <option value="<?php echo $category['category_id'] ?>" <?php echo (isset($post['category_id']) && $post['category_id'] == $category['category_id']) ? "selected" : "" ?>>
                                <?php echo $category['name'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="Localization" class="form-label">Lokalizacja</label>
                    <input type="text" class="form-control" id="Localization" name="localization"
                        placeholder="Wpisz lokalizację"
                        value="<?php echo (isset($post['localization']) === true) ? $post['localization'] : ""; ?>">
                </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 p-3 bg-light text-center">
            <div class="mb-3">
                <label for="PositionLevel" class="form-label">Pozycja</label>
                <select class="form-select" id="position_level" name="position_level">
                    <?php $isSet = isset($post['position_level']) ?>
                    <option value="" selected>Wybierz pozycje</option>
                    <option value="Praktykant / Stażysta" <?php echo ($isSet && $post['position_level'] == "Praktykant / Stażysta") ? "selected" : "" ?>>Praktykant / Stażysta</option>
                    <option value="Asystent" <?php echo ($isSet && $post['position_level'] == "Asystent") ? "selected" : "" ?>>Asystent</option>
                    <option value="Młodszy specjalista (Junior)" <?php echo ($isSet && $post['position_level'] == "Młodszy specjalista (Junior)") ? "selected" : "" ?>>Młodszy specjalista (Junior)</option>
                    <option value="Specjalista (Mid/Regular)" <?php echo ($isSet && $post['position_level'] == "Specjalista (Mid/Regular)") ? "selected" : "" ?>>Specjalista (Mid/Regular)
                    </option>
                    <option value="Starszy Specjalista (Senior)" <?php echo ($isSet && $post['position_level'] == "Starszy Specjalista (Senior)") ? "selected" : "" ?>>Starszy Specjalista (Senior)</option>
                    <option value="Ekspert" <?php echo ($isSet && $post['position_level'] == "Ekspert") ? "selected" : "" ?>>
                        Ekspert</option>
                    <option value="Kierownik / koordynator" <?php echo ($isSet && $post['position_level'] == "Kierownik / koordynator") ? "selected" : "" ?>>Kierownik / koordynator</option>
                    <option value="Menedżer" <?php echo ($isSet && $post['position_level'] == "Menedżer") ? "selected" : "" ?>>Menedżer</option>
                    <option value="Dyrektor" <?php echo ($isSet && $post['position_level'] == "Dyrektor") ? "selected" : "" ?>>Dyrektor</option>
                    <option value="Prezes" <?php echo ($isSet && $post['position_level'] == "Prezes") ? "selected" : "" ?>>
                        Prezes</option>
                    <option value="Pracownik fizyczny" <?php echo ($isSet && $post['position_level'] == "Pracownik fizyczny") ? "selected" : "" ?>>Pracownik fizyczny</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="ContractType" class="form-label">Typ umowy</label>
                <select class="form-select" id="contract_type" name="contract_type">
                    <?php $isSet = isset($post['contract_type']) ?>
                    <option value="" selected>Wybierz rodzaj umowy</option>
                    <option value="Umowa o pracę" <?php echo ($isSet && $post['contract_type'] == "Umowa o pracę") ? "selected" : "" ?>>Umowa o pracę</option>
                    <option value="Umowa o dzieło" <?php echo ($isSet && $post['contract_type'] == "Umowa o dzieło") ? "selected" : "" ?>>Umowa o dzieło</option>
                    <option value="Umowa zlecenie" <?php echo ($isSet && $post['contract_type'] == "Umowa zlecenie") ? "selected" : "" ?>>Umowa zlecenie</option>
                    <option value="Kontrakt B2B" <?php echo ($isSet && $post['contract_type'] == "Kontrakt B2B") ? "selected" : "" ?>>Kontrakt B2B</option>
                    <option value="Umowa na zastępstwo" <?php echo ($isSet && $post['contract_type'] == "Umowa na zastępstwo") ? "selected" : "" ?>>Umowa na zastępstwo</option>
                    <option value="Umowa agencyjna" <?php echo ($isSet && $post['contract_type'] == "Umowa agencyjna") ? "selected" : "" ?>>Umowa agencyjna</option>
                    <option value="Umowa o pracę tymczasową" <?php echo ($isSet && $post['contract_type'] == "Umowa o pracę tymczasową") ? "selected" : "" ?>>Umowa o pracę tymczasową</option>
                    <option value="Umowa o staż / praktyki" <?php echo ($isSet && $post['contract_type'] == "Umowa o staż / praktyki") ? "selected" : "" ?>>Umowa o staż / praktyki</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="WorkingDimensions" class="form-label">Wymiar pracy</label>
                <select class="form-select" id="working_time" name="working_time">
                    <?php $isSet = isset($post['working_time']) ?>
                    <option value="" selected>Wybierz wymiar pracy</option>
                    <option value="Część etatu" <?php echo ($isSet && $post['working_time'] == "Część etatu") ? "selected" : "" ?>>Część etatu</option>
                    <option value="Dodatkowa / tymczasowa" <?php echo ($isSet && $post['working_time'] == "Dodatkowa / tymczasowa") ? "selected" : "" ?>>Dodatkowa / tymczasowa</option>
                    <option value="Pełny etat" <?php echo ($isSet && $post['working_time'] == "Pełny etat") ? "selected" : "" ?>>Pełny etat</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="WorkingType" class="form-label">Typ pracy</label>
                <select class="form-select" id="work_type" name="work_type">
                    <?php $isSet = isset($post['work_type']) ?>
                    <option value="" selected>Wybierz typ pracy</option>
                    <option value="Praca stacjonarna" <?php echo ($isSet && $post['work_type'] == "Praca stacjonarna") ? "selected" : "" ?>>Praca stacjonarna</option>
                    <option value="Praca hybrydowa" <?php echo ($isSet && $post['work_type'] == "Praca hybrydowa") ? "selected" : "" ?>>Praca hybrydowa</option>
                    <option value="Praca zdalna" <?php echo ($isSet && $post['work_type'] == "Praca zdalna") ? "selected" : "" ?>>Praca zdalna</option>
                    <option value="Praca mobilna" <?php echo ($isSet && $post['work_type'] == "Praca mobilna") ? "selected" : "" ?>>Praca mobilna</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-search"></i> Wyszukaj
            </button>
            </form>
        </div>
        <?php if ($_SESSION['user_data']['role'] === "Admin"): ?>
            <a class="btn btn-primary text-center m-3" href="<?php echo ROOT_URL; ?>ads/add">Dodaj ogłoszenie</a>
                <a class="btn btn-primary text-center m-3"
                    href="<?php echo ROOT_URL; ?>category">Kategorie</a>
            <a class="btn btn-primary text-center m-3" href="<?php echo ROOT_URL; ?>company">Firmy</a>
        <?php endif; ?>
    </div>
</div>

<?php foreach ($rows as $item): ?>
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
            <a class="btn btn-primary text-center m-3"
                href="<?php echo ROOT_URL; ?>ads/announcement/<?php echo $item['announcement_id'] ?>">Zobacz</a>
            <?php if ($_SESSION['user_data']['role'] === "Admin"): ?>
                <a class="btn btn-primary text-center m-3"
                    href="<?php echo ROOT_URL; ?>ads/delete/<?php echo $item['announcement_id'] ?>">Usuń</a>
            <?php endif; ?>
        </div>
    </div>
<?php endforeach; ?>