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
    <div class="container">
        <div class="container">
            <div class="row">

                <div id="userDataAccordion" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light">
                    <div class="accordion accordion-flush" id="Flush1">
                        <div class="accordion-item" style="margin-bottom: 0;">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Dane Uzytkownika
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush1">
                                <div class="accordion-body">



                                    <div class="mb-3">
                                        <label for="nameInput" class="form-label">Imie</label>
                                        <input type="text" class="form-control" id="nameInput" name="name" disabled
                                            value="<?php echo $model['user']['user_data']['name']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="surnameInput" class="form-label">Nazwisko</label>
                                        <input type="text" class="form-control" id="surnameInput" name="surname"
                                            disabled value="<?php echo $model['user']['user_data']['surname']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="BirthDateInput" class="form-label">Data Urodzenia</label>
                                        <input type="date" class="form-control" id="BirthDateInput" name="birth_date"
                                            disabled value="<?php echo $model['user']['user_data']['birth_date']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="EmailInput" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="EmailInput" name="email" disabled
                                            value="<?php echo $model['user']['user_data']['email']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="NumberInput" class="form-label">Numer Telefonu</label>
                                        <input type="number" class="form-control" id="NumberInput" disabled
                                            name="telephone_number"
                                            value="<?php echo $model['user']['user_data']['telephone_number']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="CityInput" class="form-label">Miasto</label>
                                        <input type="text" class="form-control" id="CityInput" name="city" disabled
                                            value="<?php echo $model['user']['user_data']['city']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="CurrentOccupationInput" class="form-label">Aktualna praca</label>
                                        <textarea class="form-control" id="CurrentOccupationInput"
                                            name="currnent_occupation" disabled>
                                                <?php echo $model['user']['user_data']['currnent_occupation']; ?>
                                            </textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="WorkingSummary" class="form-label">Podsumowanie pracy</label>
                                        <textarea class="form-control" id="WorkingSummary" name="summary" disabled>
                                                <?php echo $model['user']['user_data']['summary']; ?>
                                            </textarea>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="2" class="col-xl-12 col-lg-12 col-md-12 col-sm-12col-xs-12 p-3 bg-light">
                    <div class="accordion accordion-flush" id="Flush2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Doswiadczenie zawodowe
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush2">
                                <div class="accordion-body">

                                    <h1>Doswiadczenie zawodowe</h1>


                                    <?php foreach ($model['user']['user_experience'] as $experience): ?>
                                        <div>
                                            <div class="card mb-3">
                                                <div class="card-header bg-primary text-white ">
                                                    Doswiadczenie
                                                    <?php echo $experience['experience_id'] ?>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <?php echo $experience['position'] ?>
                                                    </h5>
                                                    <p class="card-text">Pracowalem/lam jako:
                                                        <?php echo $experience['company'] ?>
                                                    </p>
                                                    <p class="card-text">W:
                                                        <?php echo $experience['localization'] ?>

                                                    </p>
                                                    <p class="card-text">Od:
                                                        <?php echo $experience['period_start'] ?>

                                                    </p>
                                                    <p class="card-text">Do:
                                                        <?php echo $experience['period_end'] ?>

                                                    </p>
                                                    <p class="card-text">Obowiazki:
                                                        <?php echo $experience['duties'] ?>
                                                    </p>
                                                    <p class="card-text">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div id="3" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light">
                    <div class="accordion accordion-flush" id="Flush3">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Edukacja
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush3">
                                <div class="accordion-body">

                                    <?php foreach ($model['user']['user_education'] as $education): ?>
                                        <div>
                                            <div class="card mb-3">
                                                <div class="card-header bg-primary text-white ">
                                                    Edukacja
                                                    <?php echo $education['education_id'] ?>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title"> W (szkola):
                                                        <?php echo $education['school_name'] ?>
                                                    </h5>
                                                    <p class="card-text">W (miasto):
                                                        <?php echo $education['city'] ?>
                                                    </p>
                                                    <p class="card-text">Poziom:
                                                        <?php echo $education['level'] ?>

                                                    </p>
                                                    <p class="card-text">Specjalizacja w:
                                                        <?php echo $education['specialization'] ?>

                                                    </p>
                                                    <p class="card-text">Od:
                                                        <?php echo $education['period_start'] ?>

                                                    </p>
                                                    <p class="card-text">Do:
                                                        <?php echo $education['period_end'] ?>

                                                    </p>
                                                    <p class="card-text">

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Czwarta kolumna -->
                <div id="4" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light text-center">
                    <div class="accordion accordion-flush" id="Flush4">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                   Znajomosc jezykow
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse text-center"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush4">
                                <div class="accordion-body text-center">

                                </div>
                                </form>
                                <?php foreach ($model['user']['user_language'] as $language): ?>
                                    <div>
                                        <div class="card mb-3">
                                            <div class="card-header bg-primary text-white ">
                                                Jezyk
                                                <?php echo $language['language_id'] ?>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"> Jezyk:
                                                    <?php echo $language['language'] ?> Poziom: 
                                                    <?php echo $language['level'] ?>
                                                </h5>
                                                <p class="card-text">

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="5" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3  bg-light text-center">
                    <div class="accordion accordion-flush" id="Flush5">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Zdolnosci
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush5">
                                <div class="accordion-body">


                                </div>

                                <?php foreach ($model['user']['user_skill'] as $skill): ?>
                                    <div>
                                        <?php echo $skill['skill_id'] ?>
                                        <?php echo $skill['name'] ?>

                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="6" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light text-center">
                    <div class="accordion accordion-flush" id="Flush6">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Kursy
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush6">
                                <div class="accordion-body">

                                </div>

                                <?php foreach ($model['user']['user_course'] as $course): ?>
                                    <div>
                                        <?php echo $course['course_id'] ?>
                                        <?php echo $course['name'] ?> 
                                        <?php echo $course['organizer'] ?> Od:
                                        <?php echo $course['period_start'] ?> Do: 
                                        <?php echo $course['period_end'] ?>

                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="6.5" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light text-center">
                    <div class="accordion accordion-flush" id="Flush7">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Linki
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush7">
                                <div class="accordion-body">


                                </div>

                                <?php foreach ($model['user']['user_link'] as $link): ?>
                                    <div>
                                        <?php echo $link['link_id'] ?>
                                        <a href="<?php echo $link['name'] ?>">
                                            <?php echo $link['name'] ?>
                                        </a>

                                    </div>
                                <?php endforeach; ?>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
            <div class="mb-3 text-center">
            <a class="btn btn-primary text-center m-3" href="<?php echo ROOT_URL . "applied/apply/" . $model['id'] ?>">Akceptuję I Aplikuję</a>
            <a class="btn btn-primary text-center m-3" href="<?php echo ROOT_URL . "ads/announcement/" . $model['id'] ?>">Chcę przerwać aplikację</a> 
                                    </div>
          
</body>