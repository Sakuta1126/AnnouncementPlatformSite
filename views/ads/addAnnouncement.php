<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<div>
    <div class="container">
        <div class="container">
            <form method="post" action="<?php echo ROOT_URL ?>ads/addAnnouncement">
                <div class="row">
                    <div id="userDataAccordion" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3 bg-light">
                        <div class="accordion accordion-flush" id="Flush1">
                            <div class="accordion-item" style="margin-bottom: 0;">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Form
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#Flush1">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <label for="nameInput" class="form-label">Position Name</label>
                                            <input type="text" class="form-control" id="nameInput" name="position_name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="PositionInput" class="form-label">Position Level</label>
                                            <select class="form-label" id="PositionLevel" name="position_level">
                                                <option>Praktykant / Stażysta </option>
                                                <option>Asystent</option>
                                                <option>Młodszy Specjalista (Junior)</option>
                                                <option>Specjalista (Mid/Regular)</option>
                                                <option>Starszy Specjalista (Senior)</option>
                                                <option>Ekspert</option>
                                                <option>Kierownik / Koordynator</option>
                                                <option>Menedżer</option>
                                                <option>Dyrektor</option>
                                                <option>Prezes</option>
                                                <option>Pracownik fizyczny</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="ContractType" class="form-label">Contract Type</label>
                                            <select class="form-label" id="ContractType" name="contract_type">
                                                <option>Umowa o pracę</option>
                                                <option>Umowa o dzieło</option>
                                                <option>Umowa zlecenie</option>
                                                <option>Kontrakt B2B</option>
                                                <option>Starszy Specjalista (Senior)</option>
                                                <option>Umowa na zastępstwo</option>
                                                <option>Umowa agencyjna</option>
                                                <option>Umowa o pracę tymczasową</option>
                                                <option>Umowa o staż / praktyki</option>

                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="WorkTime" class="form-label"> Work Time</label>working time
                                            <select class="form-label" id="WorkTime" name="working_time">
                                                <option>Część etatu</option>
                                                <option>Dodatkowa / Tymczasowa</option>
                                                <option>Umowa zlecenie</option>
                                                <option>Pełny etat</option>


                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="WorkType" class="form-label">Work Type
                                            </label>
                                            <select class="form-label" id="WorkType" name="work_type">
                                                <option>Praca stacjonarna</option>
                                                <option>Praca zdalna</option>
                                                <option>Praca hybrydowa</option>
                                                <option>Praca mobilna</option>


                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="WorkingHours" class="form-label">Working Hours</label>
                                            <textarea class="form-control" id="WorkingHours" name="working_hours"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="ExpireDate" class="form-label">Expire Date</label>
                                            <input type="date" class="form-control" id="ExpireDate" name="expire_date">
                                        </div>
                                        <div class="mb-3">
                                            <label for="Duties" class="form-label">Duties</label>
                                            <textarea class="form-control" id="Duties" name="duties"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Requirements" class="form-label">Requirements</label>
                                            <textarea class="form-control" id="Requirements" name="requirements"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Benefits" class="form-label">Benefits</label>
                                            <textarea class="form-control" id="Benefits" name="benefits"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Title" class="form-label">Title</label>
                                            <textarea class="form-control" id="Title" name="title"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="Sallary" class="form-label">Sallary </label>
                                            <input type="number" class="form-control" id="Sallary" name="sallary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="2" class="col-xl-12 col-lg-12 col-md-12 col-sm-12col-xs-12 p-3 bg-light">
                        <div class="accordion accordion-flush" id="Flush2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Working Days
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#Flush2">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <div>
                                                <input type="checkbox" id="WorkingDays" name="working_days[]" value="monday" />
                                                <label for="monday">Monday</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="WorkingDays" name="working_days[]" value="tuesday" />
                                                <label for="tuesday">Tuesday</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="WorkingDays" name="working_days[]" value="wednesday" />
                                                <label for="wednesday">Wednesday</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="WorkingDays" name="working_days[]" value="thursday" />
                                                <label for="thursday">Thursday</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="WorkingDays" name="working_days[]" value="friday" />
                                                <label for="friday">Friday</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="WorkingDays" name="working_days[]" value="saturday" />
                                                <label for="saturday">Saturday</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" id="WorkingDays" name="working_days[]" value="sunday" />
                                                <label for="sunday">Sunday</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="2" class="col-xl-12 col-lg-12 col-md-12 col-sm-12col-xs-12 p-3 bg-light">
                        <div class="accordion accordion-flush" id="Flush2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Category
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#Flush2">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <label for="Category" class="form-label">Category
                                            </label>
                                            <select class="form-label" id="Category" name="category_id">
                                                <?php foreach ($model['categories'] as $category) : ?>
                                                    <option value="<?php echo $category['category_id']; ?>"><?php echo $category['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div id="2" class="col-xl-12 col-lg-12 col-md-12 col-sm-12col-xs-12 p-3 bg-light">
                        <div class="accordion accordion-flush" id="Flush2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Company
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#Flush2">
                                    <div class="accordion-body">
                                        <div class="mb-3">
                                            <label for="Company" class="form-label">Company
                                            </label>
                                            <select class="form-label" id="Company" name="company_id">
                                                <?php foreach ($model['companies'] as $company) : ?>
                                                    <option value="<?php echo $company['company_id']; ?>"><?php echo $company['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary w-100 text-center m-3" value="Dodaj ogłoszenie" />
            </form>
        </div>
    </div>
</div>




</div>