<?php require APP_ROOT . '/views/includes/header.php';  ?>



<body>

    <section class="main-info">


        <!-- vaccine-shrunk-search class should add after the search -->
        <div class="vaccine-search vaccine-shrunk-search" id="vaccine-main-search-engine">
            <div class="vaccine-title">
                <img class="vaccine-logo" src="<?php echo URL_ROOT; ?>/public/images/vaccine-logo.png" alt="covid-19 vaccine">
                <h1 class="text-primary">Vaccination</h1>
            </div>

            <form class="form mb-3 vaccine-search-div" method="POST" action="<?php echo URL_ROOT; ?>/pages/vaccination">

                <input type="text" class="vaccine-search-bar form-control" id="vaccine-search-bar-input" placeholder="Enter health ID here" name="vaccine-search-bar-input" required>

                <input type="submit" class="btn btn-primary" id="vaccine-search-btn" name="vaccine-search" value="Search">

            </form>

        </div>

        <!-- This is what should display after search -->

        <!-- Add addmination-fade-in-pre-state to add the animation -->
        <div class="vaccine-search-result" id="vaccine-search-result-section">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-new-vac-person">Add new vaccinated person +</button>

            <!-- This is the division to display if the search result available -->

            <?php if ($data["vaccinations"]) { ?>


                <div class="vaccine-details">

                    <div class="vaccine-patient-detail">
                        <table>
                            <tr>
                                <th class="vaccine-detail-title">
                                    Health ID
                                </th>
                                <th>
                                    :
                                </th>

                                <!-- This is a dummy -->
                                <td class="vaccine-detail-data">
                                    <?php echo $data['health_id'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="vaccine-detail-title">
                                    Name
                                </th>
                                <th>
                                    :
                                </th>

                                <!-- This is a dummy -->
                                <td class="vaccine-detail-data">
                                    <?php echo $data['name'] ?>
                                </td>
                            </tr>

                            <tr>
                                <th class="vaccine-detail-title">
                                    Age
                                </th>
                                <th>
                                    :
                                </th>

                                <!-- This is a dummy -->
                                <td class="vaccine-detail-data">
                                    <?php echo $data['dob'] ?>
                                </td>
                            </tr>
                        </table>
                    </div>


                    <!-- These are the vaccination details -->

                    <div class="vaccine-previous-details">

                        <div class="vaccine-tr vaccine-top-tr">
                            <div class="vaccine-th vaccine-td">Vaccine ID </div>
                            <div class="vaccine-th vaccine-td">Vaccine Name</div>
                            <div class="vaccine-th vaccine-td">Hospital Id</div>
                            <div class="vaccine-th vaccine-td">Date of Vaccination</div>
                            <div class="vaccine-th vaccine-td">Dose</div>
                            <div class="vaccine-th vaccine-td">Place of Vaccination</div>
                            <div class="vaccine-th vaccine-td">Comments</div>
                        </div>


                        <?php

                        $vaccinations = $data["vaccinations"];

                        foreach ($vaccinations as $vaccine) :
                        ?>


                            <div class="vaccine-tr">
                                <div class="vaccine-td">
                                    <?php echo $vaccine["id"] ?>
                                </div>

                                <div class="vaccine-td"><?php echo $vaccine["vaccine_name"] ?></div>

                                <div class="vaccine-td"><?php echo $vaccine["hospital_id"] ?></div>

                                <div class="vaccine-td"><?php echo $vaccine["date"] ?></div>

                                <div class="vaccine-td"><?php echo $vaccine["dose"] ?></div>

                                <div class="vaccine-td"><?php echo $vaccine["vaccinated_place"] ?></div>

                                <div class="vaccine-td"><?php echo $vaccine["comments"] ?></div>

                            </div>

                        <?php endforeach; ?>




                    </div>

                    <div class="vaccine-last-btn">

                        <button class="btn btn-primary vaccine-btn-new" data-bs-toggle="modal" data-bs-target="#add-new-vac">Add new vaccination +</button>

                    </div>



                </div>

            <?php } else { ?>


                <!-- This is the division to display if the search result not available -->
                <div class="vaccine-details vaccine-no-result-div">

                    <div class="vaccine-sad-face image-centered">
                        <img class="vaccine-sad-face-img" src="<?php echo URL_ROOT; ?>/public/images/sad-face.png" alt="">
                    </div>
                    <p class="vaccine-no-result-message">
                        No search results found
                    </p>

                </div>

            <?php } ?>



        </div>


        <!-- This is the UI modal for add new vaccine -->

        <!-- Modal -->
        <div class="modal fade" id="add-new-vac" tabindex="-1" aria-labelledby="vac-forum" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <form class="modal-content">
                    <div class="modal-header vaccine-modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <h5 class="modal-title vaccine-modal-title" id="vac-forum">Vaccination Forum</h5>

                    </div>
                    <div class="modal-body">

                        <div class="col-md-8 vaccine-input">
                            <label for="inputVaccineName" class="form-label-primary label-primary vaccine-input-label">Vaccination Name</label>
                            <input type="text" class="form-control vaccine-input-field" id="inputVaccineName" required>
                        </div>
                        <div class="col-md-6 vaccine-input">
                            <label for="inputDate" class="form-label-primary vaccine-input-label">Vaccinated Date</label>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control vaccine-input-field" id="inputDate" required>
                        </div>
                        <div class="col-md-8 vaccine-input">
                            <label for="inputHospital" class="form-label-primary vaccine-input-label">Conducted Hospital</label>

                            <!-- THis is the code for drop down -->
                            <div class="select-box">
                                <div class="options-container">
                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption1" name="category" />
                                        <label for="inputOption1">Gampaha General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption2" name="category" />
                                        <label for="inputOption2">Colombu General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption3" name="category" />
                                        <label for="inputOption3">Negambu General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption4" name="category" />
                                        <label for="inputOption4">Jaffna General hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption5" name="category" />
                                        <label for="inputOption5">Kaluthara General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption6" name="category" />
                                        <label for="inputOption6">Sirisena Pvt Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption7" name="category" />
                                        <label for="inputOption7">Moratuwa General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption8" name="category" />
                                        <label for="inputOption8">Sirikotha Mental Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption9" name="category" />
                                        <label for="inputOption9">Wikramasinghe Private Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption10" name="category" />
                                        <label for="inputOption10">Namal health care center</label>
                                    </div>



                                </div>

                                <div class="selected">

                                    <!-- This is the input that need to be grabed -->
                                    <input type="text" class="selected-text" placeholder="Choose" maxlength="0" required>

                                </div>




                                <div class="search-box">
                                    <input type="text" placeholder="Start Typing..." />
                                </div>
                            </div>

                            <!-- End of drop down -->

                        </div>


                        <div class="col-md-8 vaccine-input">
                            <label for="inputVaccinePlace" class="form-label-primary label-primary vaccine-input-label">Vaccinated Place</label>
                            <input type="text" class="form-control vaccine-input-field" id="inputVaccinePlace" placeholder="(Optional)">
                        </div>
                        <div class="col-md-3 vaccine-input">
                            <label for="inputDose" class="form-label-primary vaccine-input-label">Number of Dosage</label>
                            <input type="number" class="form-control vaccine-input-field" id="inputDose" min="1" required>
                        </div>
                        <div class="col-md-8 vaccine-input">
                            <label for="inputComments" class="form-label-primary label-primary vaccine-input-label"> <span class="vaccine-form-comment">Comments</span></label>
                            <textarea class="form-control vaccine-input-field vaccine-textarea" id="inputComments" rows="4" placeholder="(Optional)"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer vaccine-modal-footer">
                        <button type="submit" class="btn btn-primary vaccine-submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- This is the UI modal for add new vaccinated person -->
        <div class="modal fade" id="add-new-vac-person" tabindex="-1" aria-labelledby="vac-forum" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                
                <form class="modal-content" method="POST" action="<?php echo URL_ROOT; ?>/pages/vaccination">
                    <div class="modal-header vaccine-modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                        <h5 class="modal-title vaccine-modal-title" id="vac-forum">Vaccination Forum</h5>

                    </div>
                    <div class="modal-body">

                        <div class="col-md-8 vaccine-input">
                            <label for="inputPatientName" class="form-label-primary label-primary vaccine-input-label">Patient's Full Name</label>
                            <input type="text" class="form-control vaccine-input-field" id="inputPatientName" required>
                        </div>

                        <div class="col-md-8 vaccine-input">
                            <label for="inputHealthID" class="form-label-primary label-primary vaccine-input-label">Patient's Health ID</label>
                            <input type="text" class="form-control vaccine-input-field" id="inputHealthID" required>
                        </div>

                        <div class="col-md-8 vaccine-input">
                            <label for="inputVaccineName" class="form-label-primary label-primary vaccine-input-label">Vaccination Name</label>
                            <input type="text" class="form-control vaccine-input-field" id="inputVaccineName" required>
                        </div>

                        <div class="col-md-6 vaccine-input">
                            <label for="inputDate" class="form-label-primary vaccine-input-label">Vaccinated Date</label>
                            <input type="date" value="<?php echo date('Y-m-d'); ?>" class="form-control vaccine-input-field" id="inputDate" required>
                        </div>

                        <div class="col-md-8 vaccine-input">
                            <label for="inputHospital" class="form-label-primary vaccine-input-label">Conducted Hospital</label>

                            <!-- THis is the code for drop down -->
                            <div class="select-box">
                                <div class="options-container">
                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption1" name="category" />
                                        <label for="inputOption1">Gampaha General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption2" name="category" />
                                        <label for="inputOption2">Colombu General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption3" name="category" />
                                        <label for="inputOption3">Negambu General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption4" name="category" />
                                        <label for="inputOption4">Jaffna General hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption5" name="category" />
                                        <label for="inputOption5">Kaluthara General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption6" name="category" />
                                        <label for="inputOption6">Sirisena Pvt Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption7" name="category" />
                                        <label for="inputOption7">Moratuwa General Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption8" name="category" />
                                        <label for="inputOption8">Sirikotha Mental Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption9" name="category" />
                                        <label for="inputOption9">Wikramasinghe Private Hospital</label>
                                    </div>

                                    <div class="option">
                                        <input type="radio" class="radio" id="inputOption10" name="category" />
                                        <label for="inputOption10">Namal health care center</label>
                                    </div>



                                </div>

                                <div class="selected">

                                    <!-- This is the input that need to be grabed -->
                                    <input type="text" class="selected-text" placeholder="Choose" maxlength="0" required>

                                </div>




                                <div class="search-box">
                                    <input type="text" placeholder="Start Typing..." />
                                </div>
                            </div>

                            <!-- End of drop down -->

                        </div>


                        <div class="col-md-8 vaccine-input">
                            <label for="inputVaccinePlace" class="form-label-primary label-primary vaccine-input-label">Vaccinated Place</label>
                            <input type="text" class="form-control vaccine-input-field" id="inputVaccinePlace" placeholder="(Optional)">
                        </div>

                        <div class="col-md-3 vaccine-input">
                            <label for="inputDose" class="form-label-primary vaccine-input-label">Number of Dosage</label>
                            <input type="number" class="form-control vaccine-input-field" id="inputDose" min="1" required>
                        </div>

                        <div class="col-md-8 vaccine-input">
                            <label for="inputComments" class="form-label-primary label-primary vaccine-input-label"> <span class="vaccine-form-comment">Comments</span></label>
                            <textarea class="form-control vaccine-input-field vaccine-textarea" id="inputComments" rows="4" placeholder="(Optional)"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer vaccine-modal-footer">
                        <button type="submit" class="btn btn-primary vaccine-submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </section>


    <script src="<?php echo URL_ROOT; ?>/public/script/vaccine.js"></script>

</body>