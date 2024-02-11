<!DOCTYPE html>
<html lang="en">

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
    <?php
        error_reporting(0);
        $user_data = $model['user_data'];
        $user_experience = $model['user_experience'];
        $user_education = $model['user_education'];
        $user_language = $model['user_language'];
        $user_skill = $model['user_skill'];
        $user_course = $model['user_course'];
        $user_link = $model['user_link'];
        // echo "<pre>";
        // print_r($model);
        // echo "</pre>";
        $json = json_encode($model);
    ?>
    <script>
        // caly profil przechowuje w obiekcie js
        var model = <?php echo $json; ?>;
    </script>
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
                                    User Data
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush1">
                                <div class="accordion-body">
                                    <form method="post" enctype="multipart/form-data" action="<?php echo ROOT_URL; ?>users/save">
                                        <div class="mb-3 col-4">
                                            <label class="w-100" for="pfpInput">
                                                <img id="pfpImg" class="w-100 object-fit-cover border border-1 border-dark shadow" alt="zdjęcie profilowe" src="<?php echo ROOT_URL.$user_data['pfp']; ?>">
                                            </label>
                                            <input id="pfpInput" type="file" name="pfp" class="d-none" accept=".jpg, .jpeg, .png">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nameInput" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="nameInput" name="name" value="<?php echo $user_data['name']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="surnameInput" class="form-label">Surname</label>
                                            <input type="text" class="form-control" id="surnameInput" name="surname"  value="<?php echo $user_data['surname']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="BirthDateInput" class="form-label">Birth-Date</label>
                                            <input type="date" class="form-control" id="BirthDateInput" name="birth_date" value="<?php echo $user_data['birth_date']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="EmailInput" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="EmailInput" name="email" value="<?php echo $user_data['email']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="NumberInput" class="form-label">Number</label>
                                            <input type="number" class="form-control" id="NumberInput"name="telephone_number" value="<?php echo $user_data['telephone_number']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="CityInput" class="form-label">City</label>
                                            <input type="text" class="form-control" id="CityInput" name="city" value="<?php echo $user_data['city']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="CurrentOccupationInput" class="form-label">CurrentOccupation</label>
                                            <textarea class="form-control" id="CurrentOccupationInput" name="currnent_occupation">
                                                <?php echo $user_data['currnent_occupation']; ?>
                                            </textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="WorkingSummary" class="form-label">WorkingSummary</label>
                                            <textarea class="form-control" id="WorkingSummary" name="summary">
                                                <?php echo $user_data['summary']; ?>
                                            </textarea>
                                        </div>
                                        <div class="row text-center ">
                                            <div id="6.5"
                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light">
                                                <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                                <input type="hidden" name="type" value="user_data">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Druga kolumna -->
                <div id="2" class="col-xl-12 col-lg-12 col-md-12 col-sm-12col-xs-12 p-3 bg-light">
                    <div class="accordion accordion-flush" id="Flush2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Working Experience
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush2">
                                <div class="accordion-body">
                                    <form method="post" action="<?php echo ROOT_URL; ?>users/save">
                                        <h1>Working experience</h1>
                                        <div class="mb-3">
                                            <label for="PositionInput" class="form-label">Position</label>
                                            <input type="text" class="form-control" id="PositionInput" name="position">
                                        </div>
                                        <div class="mb-3">
                                            <label for="CompanyInput" class="form-label">Company</label>
                                            <input type="text" class="form-control" id="CompanyInput" name="company">
                                        </div>
                                        <div class="mb-3">
                                            <label for="LocalizationInput" class="form-label">Localization</label>
                                            <input type="text" class="form-control" id="LocalizationInput" name="localization">
                                        </div>
                                        <div class="mb-3">
                                            <label for="WorkPeriodStartInput" class="form-label">Working Period-Start</label>
                                            <input type="date" class="form-control" id="WorkPeriodStartInput" name="period_start">
                                        </div>
                                        <div class="mb-3">
                                            <label for="WorkPeriodEndInput" class="form-label">Working Period-End</label>
                                            <input type="date" class="form-control" id="WorkPeriodEndInput" name="period_end">
                                        </div>
                                        <div class="mb-3">
                                            <label for="DutiesInput" class="form-label">Duties</label>
                                            <textarea class="form-control" id="DutiesInput" name="duties"></textarea>
                                        </div>
                                        <div class="row text-center ">
                                            <div id="6.5"
                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light">
                                                <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                                <input type="hidden" name="type" value="user_experience">
                                            </div>
                                        </div>
                                    </form>
                                    <?php foreach ($user_experience as $experience): ?>
                                        <div>
                                            <div class="card mb-3">
                                                <div class="card-header bg-primary">
                                                    Experience
                                                    <?php echo $experience['experience_id'] ?>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title">
                                                        <?php echo $experience['position'] ?>
                                                    </h5>
                                                    <p class="card-text">Worked In:
                                                        <?php echo $experience['company'] ?>
                                                    </p>
                                                    <p class="card-text">In:
                                                        <?php echo $experience['localization'] ?>

                                                    </p>
                                                    <p class="card-text">From:
                                                        <?php echo $experience['period_start'] ?>

                                                    </p>
                                                    <p class="card-text">To:
                                                        <?php echo $experience['period_end'] ?>

                                                    </p>
                                                    <p class="card-text">Duties:
                                                        <?php echo $experience['duties'] ?>
                                                    </p>
                                                    <p class="card-text">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" entity_id = "<?php echo $experience['experience_id']?>">
                                                            Edytuj
                                                        </button>
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
                                    Education
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush3">
                                <div class="accordion-body">
                                    <form method="post" action="<?php echo ROOT_URL; ?>users/save">
                                        <h1>Education</h1>
                                        <div class="mb-3">
                                            <label for="SchoolnameInput" class="form-label">School name</label>
                                            <input type="text" class="form-control" id="SchoolnameInput"  name="school_name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="SchoolCityInput" class="form-label">School City</label>
                                            <input type="text" class="form-control" id="SchoolCityInput"  name="city">
                                        </div>
                                        <div class="mb-3">
                                            <label for="EducationLevelInput" class="form-label">Education Level</label>
                                            <select class="form-label" id="EducationLevelInput"  name="level">
                                                <option>podstawowe </option>
                                                <option>zawodowe</option>
                                                <option>srednie</option>
                                                <option>licencjat</option>
                                                <option>inzynier</option>
                                                <option>magister</option>
                                                <option>doktor</option>
                                                <option>doktor habilitowany</option>
                                                <option>profesor</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="SpecializationInput" class="form-label">Specialization</label>
                                            <input type="text" class="form-control" id="SpecializationInput" name="specialization">
                                        </div>
                                        <div class="mb-3">
                                            <label for="EducationStartInput" class="form-label">Education Period-Start</label>
                                            <input type="date" class="form-control" id="EducationStartInput"  name="period_start">
                                        </div>
                                        <div class="mb-3">
                                            <label for="EducationEndInput" class="form-label">Education Period-End</label>
                                            <input type="date" class="form-control" id="EducationEndInput" name="period_end">
                                        </div>
                                        <div class="row text-center ">
                                            <div id="6.5"
                                                class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light">
                                                <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                                <input type="hidden" name="type" value="user_education">
                                            </div>
                                        </div>
                                    </form>
                                    <?php foreach ($user_education as $education): ?>
                                        <div>
                                            <div class="card mb-3">
                                                <div class="card-header bg-primary">
                                                    Education
                                                    <?php echo $education['education_id'] ?>
                                                </div>
                                                <div class="card-body">
                                                    <h5 class="card-title"> At:
                                                        <?php echo $education['school_name'] ?>
                                                    </h5>
                                                    <p class="card-text">In:
                                                        <?php echo $education['city'] ?>
                                                    </p>
                                                    <p class="card-text">Level:
                                                        <?php echo $education['level'] ?>

                                                    </p>
                                                    <p class="card-text">Specialized in:
                                                        <?php echo $education['specialization'] ?>

                                                    </p>
                                                    <p class="card-text">From:
                                                        <?php echo $education['period_start'] ?>

                                                    </p>
                                                    <p class="card-text">To:
                                                        <?php echo $education['period_end'] ?>

                                                    </p>
                                                    <p class="card-text">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" entity_id = "<?php echo $education['education_id']?>">
                                                            Edytuj
                                                        </button>
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
                                Lang Knowledge
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse text-center"
                            aria-labelledby="flush-headingOne" data-bs-parent="#Flush4">
                            <div class="accordion-body text-center">
                                <form method="post" action="<?php echo ROOT_URL; ?>users/save">
                             
                                        <h1>Lang Knowledge</h1>
                                        <div class="mb-3">
                                            <label for="LangInput" class="form-label">Lang</label>
                                            <input type="text" class="form-control" id="LangInput"  name="language">
                                        </div>
                                        <div class="mb-3">
                                            <label for="LangLevelInput" class="form-label">Lang Level</label> <br>
                                            <select class="form-label" id="LangLevelInput" name="level">
                                                <option>podstawowy </option>
                                                <option>srednio zaawansowany</option>
                                                <option>zaawansowany</option>

                                            </select>
                                            <br>
                                            <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                            <input type="hidden" name="type" value="user_language">
                                        </div>
                                    </div>
                                </form>
                                <?php foreach ($user_language as $language): ?>
                                    <div>
                                        <div class="card mb-3">
                                            <div class="card-header bg-primary">
                                                Language
                                                <?php echo $language['language_id'] ?>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"> At:
                                                    <?php echo $language['language']?>;
                                                    <?php echo $language['level']?>;
                                                </h5>
                                                <p class="card-text">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" entity_id = "<?php echo $language['language_id']?>">
                                                        Edytuj
                                                    </button>
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
                                Skills
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#Flush5">
                            <div class="accordion-body">
                                <form method="post" action="<?php echo ROOT_URL; ?>users/save">
                                    
                                        <div class="mb-3">
                                            <h1>Skills</h1>
                                            <label for="SkillInput" class="form-label">Skills</label><br>
                                            <select class="form-label" id="SkillInput" name="name">
                                                <option>obsluga pakietu xxx </option>
                                                <option>prawo jazdy kategorii xxx</option>
                                                <option>operator maszyn CNC</option>
                                                <option>licencja na helikopter</option>
                                            </select>
                                            <br>
                                            <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                            <input type="hidden" name="type" value="user_skill">
                                        </div>

                                    </div>
                                </form>
                                <?php foreach ($user_skill as $skill): ?>
                                    <div>
                                        <?php echo $skill['skill_id']?>;
                                        <?php echo $skill['name']?>;
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" entity_id = "<?php echo $skill['skill_id']?>">
                                        Edytuj
                                        </button>
                                    </div>
                                <?php endforeach; ?>  
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
                                    Courses
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#Flush6">
                                <div class="accordion-body">
                                    <form method="post" action="<?php echo ROOT_URL; ?>users/save">
                                       
                                            <h1>Courses</h1>
                                            <div class="mb-3">
                                                <label for="CoursenameInput" class="form-label">Course name</label>
                                                <input type="text" class="form-control" id="CoursenameInput"  name="name">
                                            </div>
                                            <div class="mb-3">
                                                <label for="OrganizernameInput" class="form-label">Organizer name</label>
                                                <input type="text" class="form-control" id="OrganizernameInput"  name="organizer">
                                            </div>
                                            <div class="mb-3">
                                                <label for="CourseStartInput" class="form-label">Course Period-Start</label>
                                                <input type="date" class="form-control" id="CourseStartInput"  name="period_start">
                                            </div>
                                            <div class="mb-3">
                                                <label for="CourseEndInput" class="form-label">Course Period-End</label>
                                                <input type="date" class="form-control" id="CourseEndInput"  name="period_end">
                                            </div>
                                            <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                            <input type="hidden" name="type" value="user_course">
                                        </div>
                                    </form>
                                    <?php foreach ($user_course as $course): ?>
                                        <div>
                                            <?php echo $course['course_id']?>;
                                            <?php echo $course['name']?>;
                                            <?php echo $course['organizer']?>;
                                            <?php echo $course['period_start']?>;
                                            <?php echo $course['period_end']?>;s
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" entity_id = "<?php echo $course['course_id']?>">
                                            Edytuj
                                            </button>
                                        </div>
                                    <?php endforeach; ?>   
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                    <div id="6.5"  class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 ms-2 bg-light text-center">
                        <div class="accordion accordion-flush" id="Flush7">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        Links
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#Flush7">
                                    <div class="accordion-body">
                                        <form method="post" action="<?php echo ROOT_URL; ?>users/save">
                                                <h1>Links</h1>
                                                <div class="mb-3">
                                                    <label for="LinkInput" class="form-label">Link</label>
                                                    <input type="text" class="form-control" id="LinkInput"  name="name">
                                                </div>
                                                <input type="submit" value="Edit" name="submit" class="btn btn-primary">
                                                <input type="hidden" name="type" value="user_link">
                                            </div>
                                        </form>
                                        <?php foreach ($user_link as $link): ?>
                                            <div>
                                                <?php echo $link['link_id']?>;
                                                <a href="<?php echo $link['name']?>"><?php echo $link['name']?>;</a> 
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop" entity_id = "<?php echo $link['link_id']?>">
                                                Edytuj
                                                </button>
                                            </div>
                                        <?php endforeach; ?>   
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>

        <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modal-body">
                ...
            </div>
            </div>
        </div>
    </div>

    <script>
        var pfpInput = document.getElementById('pfpInput');
        pfpInput.addEventListener('change', function(e) {
            getImgData();
        });
        function getImgData() {
            const files = pfpInput.files[0];
            if (files) {
                const fileReader = new FileReader();
                fileReader.readAsDataURL(files);
                fileReader.addEventListener("load", function () {
                    console.log(this.result);
                    document.getElementById("pfpImg").src = this.result;
                });    
            }
            }

        var buttons = document.querySelectorAll(".container button")
        
        buttons.forEach((element) => element.addEventListener("click", modalTrigger));
        function modalTrigger(event){
            //element to div, w którym znajduje się formularz
            let element = event.target.parentElement.parentElement.parentElement.parentElement.parentElement;
            //entityId to id elementu, który edytujemy
            let entityId = event.target.getAttribute("entity_id");
            //form to formularz w którym jest dany button
            let form = element.querySelector("form");

            //przypisuje do modala cały formularz, z którego pochodzi button
            document.getElementById("modal-body").innerHTML = form.outerHTML;

            //dorzucam do formularza ukryte pole z id elementu który edytujemy - to sie przyda w phpie, żeby odróżnić czy funkcja ma dodawac czy edytować
            let hiddenInput = document.createElement("input");
            hiddenInput.setAttribute("type", "hidden");
            hiddenInput.setAttribute("name", "entity_id");
            hiddenInput.setAttribute("value", entityId);

            document.getElementById("modal-body").querySelector("form").append(hiddenInput);

            //wyłuskuje z htmla nazwe tabeli której dotyczy edycja
            let table_name = document.getElementById("modal-body").querySelector("form input[name=type]").getAttribute("value");
            // usuwam z nazwy tabeli "user_";
            let entity_name = table_name.replace(/user_/, '');
            //dodaje do tego _id i mam nazwe klucz podstawowego tabeli, fajne nie ? 
            let primaryKeyName = entity_name + "_id";

            // wyszukuje cały obiekt, którego dotyczy nasza edycja w tablicy, którą na górze strony utworzyłem
            let entity = window['model'][table_name].find(function(obiekt) {
                return obiekt[primaryKeyName] == entityId;
            });
            //i tutaj korzystając z tego że zmieniłem, że nazwy pól formularza nazywają się tak jak pola w bazie danych
            // to do każdego inputa przypisuje "value" takie jakie ma obiekt, który edytujemy
            // ale narazie <select> oraz <textarea> nie dziala, bo one nie mają atrybutu value, do ogarnięcia później
            for (var key in entity) {
                let querySelector = "form textarea[name=" + key + "]";
                var textarea = document.getElementById("modal-body").querySelector(querySelector);
                if(textarea != null){
                    textarea.innerHTML = entity[key];
                    continue;
                }
                querySelector = "form select[name=" + key + "]";
                var select = document.getElementById("modal-body").querySelector(querySelector);
                if(select != null){
                    let options = select.querySelectorAll("option");
                    options.forEach((element) => {
                        if (element.innerText == entity[key]) {
                            element.setAttribute("selected", "selected");
                        }
                    });
                    continue;
                }
                //TODO obsłużyć <select> oraz <textarea> bo nie dziala w taki sposób
                querySelector = "form input[name=" + key + "]"; //wzór do querySelectora na nasze pole o identycznej nazwie jak w bazie danych
                var input = document.getElementById("modal-body").querySelector(querySelector);
                if(input != undefined){
                    // i tutaj ustawiam value na to co w obiekcie
                    input.setAttribute("value", entity[key]);
                }
            }   
        }
    </script>
</body>

</html>