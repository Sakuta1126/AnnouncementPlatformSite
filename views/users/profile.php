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

    <form method="post" action="<?php echo ROOT_URL; ?>users/save">
        <div class="container">
            <div id="0" class="col-xl-3 col-lg-3 col-md-3 col-4 m-auto pt-3 pb-3 ">
                <h1>Profile</h1>
                <label class="w-100" for="pfpInput">
                    <img class="w-100 object-fit-cover border border-1 border-dark shadow" alt="zdjęcie profilowe"
                        src="http://localhost/Sigmowo/images/isac.jpg">
                </label>
                <input id="pfpInput" type="file" class="d-none" accept=".jpg, .jpeg, .png">
            </div>

            <div class="row">
                <!-- Pierwsza kolumna -->
                <div id="1" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 bg-light">
                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nameInput">
                    </div>
                    <div class="mb-3">
                        <label for="surnameInput" class="form-label">Surname</label>
                        <input type="password" class="form-control" id="surnameInput">
                    </div>
                    <div class="mb-3">
                        <label for="BirthDateInput" class="form-label">Birth-Date</label>
                        <input type="date" class="form-control" id="BirthDateInput">
                    </div>
                    <div class="mb-3">
                        <label for="EmailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="EmailInput">
                    </div>
                    <div class="mb-3">
                        <label for="NumberInput" class="form-label">Number</label>
                        <input type="number" class="form-control" id="NumberInput">
                    </div>
                    <div class="mb-3">
                        <label for="CityInput" class="form-label">City</label>
                        <input type="text" class="form-control" id="CityInput">
                    </div>
                    <div class="mb-3">
                        <label for="CurrentOccupationInput" class="form-label">CurrentOccupation</label>
                        <textarea class="form-control" id="CurrentOccupationInput"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="WorkingSummary" class="form-label">WorkingSummary</label>
                        <textarea class="form-control" id="WorkingSummary"></textarea>
                    </div>

                    <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>

                <!-- Druga kolumna -->
                <div id="2" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 bg-light">

                    <h1>Working experience</h1>
                    <div class="mb-3">
                        <label for="PositionInput" class="form-label">Position</label>
                        <input type="text" class="form-control" id="PositionInput">
                    </div>
                    <div class="mb-3">
                        <label for="CompanyInput" class="form-label">Company</label>
                        <input type="text" class="form-control" id="CompanyInput">
                    </div>
                    <div class="mb-3">
                        <label for="LocalizationInput" class="form-label">Localization</label>
                        <input type="text" class="form-control" id="LocalizationInput">
                    </div>
                    <div class="mb-3">
                        <label for="WorkPeriodStartInput" class="form-label">Working Period-Start</label>
                        <input type="date" class="form-control" id="WorkPeriodStartInput">
                    </div>
                    <div class="mb-3">
                        <label for="WorkPeriodEndInput" class="form-label">Working Period-End</label>
                        <input type="date" class="form-control" id="WorkPeriodEndInput">
                    </div>
                    <div class="mb-3">
                        <label for="DutiesInput" class="form-label">Duties</label>
                        <textarea class="form-control" id="DutiesInput"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">

                <div id="3" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 bg-light">
                    <h1>Education</h1>
                    <div class="mb-3">
                        <label for="SchoolnameInput" class="form-label">School name</label>
                        <input type="text" class="form-control" id="SchoolnameInput">
                    </div>
                    <div class="mb-3">
                        <label for="SchoolCityInput" class="form-label">School City</label>
                        <input type="text" class="form-control" id="SchoolCityInput">
                    </div>
                    <div class="mb-3">
                        <label for="EducationLevelInput" class="form-label">Education Level</label>
                        <select class="form-label" id="EducationLevelInput">
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
                        <input type="text" class="form-control" id="SpecializationInput">
                    </div>
                    <div class="mb-3">
                        <label for="EducationStartInput" class="form-label">Education Period-Start</label>
                        <input type="date" class="form-control" id="EducationStartInput">
                    </div>
                    <div class="mb-3">
                        <label for="EducationEndInput" class="form-label">Education Period-End</label>
                        <input type="date" class="form-control" id="EducationEndInput">
                    </div>

                </div>
                <!-- Czwarta kolumna -->
                <div id="4" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 bg-light">
                    <h1>Lang Knowledge</h1>
                    <div class="mb-3">
                        <label for="LangInput" class="form-label">Lang</label>
                        <input type="text" class="form-control" id="LangInput">
                    </div>
                    <div class="mb-3">
                        <label for="LangLevelInput" class="form-label">Lang Level</label> <br>
                        <select class="form-label" id="LangLevelInput">
                            <option>podstawowy </option>
                            <option>srednio zaawansowany</option>
                            <option>zaawansowany</option>

                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div id="5" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 bg-light">
                    <div class="mb-3">
                        <h1>Skills</h1>
                        <label for="SkillInput" class="form-label">Skills</label><br>
                        <select class="form-label" id="SkillInput">
                            <option>obsluga pakietu xxx </option>
                            <option>prawo jazdy kategorii xxx</option>
                            <option>operator maszyn CNC</option>
                            <option>licencja na helikopter</option>
                        </select>
                    </div>

                </div>
                <div id="6" class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12 p-3 bg-light">
                    <h1>Courses</h1>
                    <div class="mb-3">
                        <label for="CoursenameInput" class="form-label">Course name</label>
                        <input type="text" class="form-control" id="CoursenameInput">
                    </div>
                    <div class="mb-3">
                        <label for="OrganizernameInput" class="form-label">Organizer name</label>
                        <input type="text" class="form-control" id="OrganizernameInput">
                    </div>
                    <div class="mb-3">
                        <label for="CourseStartInput" class="form-label">Course Period-Start</label>
                        <input type="date" class="form-control" id="CourseStartInput">
                    </div>
                    <div class="mb-3">
                        <label for="CourseEndInput" class="form-label">Course Period-End</label>
                        <input type="date" class="form-control" id="CourseEndInput">
                    </div>
                </div>

            </div>
            <div class="row">
                <div id="6.5" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light">
                    <h1>Links</h1>
                    <div class="mb-3">
                        <label for="LinkInput" class="form-label">Link</label>
                        <input type="text" class="form-control" id="LinkInput">
                    </div>
                </div>
            </div>
            <div class="row text-center ">
                <div id="6.5" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light">

                    <button type="submit mr-3" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-primary">Edit</button>

                </div>
            </div>

        </div>
    </form>

</body>

</html>