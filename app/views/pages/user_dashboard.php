<?php require_once APP_ROOT . "/views/includes/header.php" ?>

<body style="
background-image: url('<?php echo URL_ROOT; ?>/public/images/dashboard-background.jpg');
background-repeat: repeat;
background-attachment: fixed;">

    <div class="dashboard-container">
        <div class="dashboard-sidebar-container">
            <div class="dashboard-banner">
                <span class="dashboard-toggle-icon"><i class='bx bx-menu'></i></span>
                <span class="dashboard-text">Dashboard</span>
            </div>
            <ul class="dashboard-side-bar">
                <div class="dashboard-account-details">
                    <div class="dashboard-icon"><i class='bx bx-user-circle' style='color:#000000'></i></div>
                    <div class="dashboard-user-credentials">
                        <div class="hospital-name dashboard-credential-label" style="font-size: 13.5pt;"><?= strtoupper($_SESSION['hospitalname']) ?></div>
                        <div class="user-name dashboard-credential-label"><?= strtoupper($_SESSION['username']) ?></div>
                    </div>
                </div>
                <li class="dashboard-list" data-toggle="tooltip" data-placement="right" title="Home">
                    <a href="<?= URL_ROOT ?>/pages/index" class="option">
                        <span class="dashboard-link-icon"><i class='bx bxs-home'></i></span>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="dashboard-list" data-toggle="tooltip" data-placement="right" title="Vaccination">
                    <a href="<?= URL_ROOT ?>/pages/vaccination" class="option">
                        <span class="dashboard-link-icon"><img class="dashboard-link-icon-img" src="<?= URL_ROOT ?>/public/images/vaccine_white.png" alt="" srcset=""></span>
                        <span class="text">Vaccination</span>
                    </a>
                </li>
                <li class="dashboard-list" data-toggle="tooltip" data-placement="right" title="PCR Test">
                    <a href="<?= URL_ROOT ?>/pages/pcr" class="option">
                        <span class="dashboard-link-icon"><img class="dashboard-link-icon-img" src="<?= URL_ROOT ?>/public/images/swab_white.png" alt="" srcset=""></span>
                        <span class="text">PCR Test</span>
                    </a>
                </li>
                <li class="dashboard-list" data-toggle="tooltip" data-placement="right" title="Antigen Test">
                    <a href="<?= URL_ROOT ?>/pages/antigen" class="option">
                        <span class="dashboard-link-icon"><img class="dashboard-link-icon-img" src="<?= URL_ROOT ?>/public/images/blood_white.png" alt="" srcset=""></span>
                        <span class="text">Antigen Test</span>
                    </a>
                </li>
                <li class="dashboard-list">
                    <a href="<?= URL_ROOT ?>/pages/covid_patients" class="option" data-toggle="tooltip" data-placement="right" title="COVID Patient">
                        <span class="dashboard-link-icon"><img class="dashboard-link-icon-img" src="<?= URL_ROOT ?>/public/images/facial-mask_white.png" alt="" srcset=""></span>
                        <span class="text">COVID Patient</span>
                    </a>
                </li>
                <li class="dashboard-list" data-toggle="tooltip" data-placement="right" title="COVID Death">
                    <a href="<?= URL_ROOT ?>/pages/covid_deaths" class="option">
                        <span class="dashboard-link-icon"><img class="dashboard-link-icon-img" src="<?= URL_ROOT ?>/public/images/death_white.png" alt="" srcset=""></span>
                        <span class="text">COVID Death</span>
                    </a>
                </li>

                <li class="dashboard-list" data-toggle="tooltip" data-placement="right" title="Settings">
                    <a href="<?= URL_ROOT ?>/pages/settings" class="option">
                        <span class="dashboard-link-icon"><i class='bx bx-cog'></i></span>
                        <span class="text">Settings</span>
                    </a>
                </li>

                <li class="dashboard-list" data-toggle="tooltip" data-placement="right" title="Log Out">
                    <a href="<?= URL_ROOT ?>/users/logout" class="option">
                        <span class="dashboard-link-icon"><i class='bx bx-log-out-circle bx-flip-horizontal'></i></span>
                        <span class="text">Log Out</span>
                    </a>
                </li>


            </ul>
        </div>

       
        <!-- This is the button for showing the off canvas -->
        <button class="dashboard-search-health-id" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <div class="dashboard-health-id-div"> 
                <span>Search Health ID</span><img class="dashboard-health-id-icon" src="<?= URL_ROOT ?>/public/images/left-arrow.png" alt="" srcset=""></div>
        </button>

        <!-- This is the code for the off canvas for search for health ID -->
        <div class="offcanvas offcanvas-end dashboard-offcanvas" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">

         <!-- This is the button for showing the off canvas -->
         <button class="dashboard-search-health-id dashboard-search-health-id-post" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
            <div class="dashboard-health-id-div"><span style="transform: rotate(-90deg); width: 150px">Search Health ID</span><img class="dashboard-health-id-icon" src="<?= URL_ROOT ?>/public/images/left-arrow.png" alt="" srcset=""></div>
        </button>

            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Search for health ID</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <form class="offcanvas-body">

                <div class="dashboard-health-id-search-type col-md-12 covid-input">

                    <label for="dashboard-search-by" class="form-label-primary label-primary covid-input-label">Search Type</label>

                    <div class="dashboard-dropdown" style="position: relative;">
                        <button class="form-control covid-input-field dashboard-dropdown-btn" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                            Enter value here
                        </button>
                        <div class="dashboard-dropdown-arrow"> </div>

                        <ul class="dropdown-menu dashboard-dropdown" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>


                    </div>



                    





                </div>

                <div class="dashboard-health-id-search-input col-md-12 covid-input">
                    <label for="inputSearchValue" class="form-label-primary label-primary covid-input-label">NIC/Phone/correct value</label>
                    <input type="text" class="form-control covid-input-field" id="inputSearchValue" name="add-patient-vaccination-name" required>

                </div>

                <div>
                    <button class="btn btn-outline-primary dashboard-health-id-search">Search</button>
                </div>

                <div class="covid-patient-detail">
                    <table>
                        <tr>
                            <th class="covid-detail-title">
                                Health ID
                            </th>
                            <th>
                                :
                            </th>


                            <td class="covid-detail-data">
                                <?php echo $data['personal']['health_id'] ?>
                            </td>
                        </tr>

                        <tr>
                            <th class="covid-detail-title">
                                Name
                            </th>
                            <th>
                                :
                            </th>


                            <td class="covid-detail-data">
                                <?php echo $data['personal']['name'] ?>
                            </td>
                        </tr>

                        <tr>
                            <th class="covid-detail-title">
                                Age
                            </th>
                            <th>
                                :
                            </th>


                            <td class="covid-detail-data">
                                <?php echo $data['personal']['dob'] ?>
                            </td>
                        </tr>
                    </table>
                </div>


            </form>
        </div>