<?php include '../includes/header.php';
include '../includes/db.php'; ?>
<div class="container">
    <div class="row-mt-5">


        <div class="container-xl" style="height:400px; background-color:#4ca146;">
            <div class="row justify-content-center">
                <div class="co-md-5 text-center text-md-start text-light ps-5">
                    <h1>
                        <div class="display-5 mt-5 f2-bold text-gray" style="font-family:'Oswald', sans-serif;">Goal
                        </div>
                        <div class="display-5 f2-bold">14</div>
                        <div class="display-3 line-break fw-bold" style="margin-top:80px">Ensure health lives and
                            promote well
                            for all at all ages
                            being</div>
                    </h1>
                </div>
            </div>
        </div>
        <div class="container-lg bg-secondary justify-content-center  fs-5 pt-2 pb-1">
            <ul class="nav nav-pills " id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active text-light fw-dark" style="letter-spacing :2px;"
                        id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button"
                        role="tab" aria-controls="pills-profile" aria-selected="false">Target</button>
                </li>
            </ul>
        </div>
        <div class="tab-content container-lg justify-content-center" id="pills-tabContent">
            <div class="tab-pane fade show active " id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <div class="container d-grid" id="research311">

                    <!--start of the div content-->
                    <!--research 5.1.1-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                 <!--image of the sdg-->
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.1.1</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Research on gender equality</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score511">Score:</h3>


                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.1.1`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_511 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Research for gender 
                                    Equality: <?php echo $totalRecord_511 ?></h3>
                                    <?php
                                    $json_data_511 = json_encode($totalRecord_511);
                                    $query511 = "SELECT * FROM `research5.1.1` WHERE total_no_published_research IS NOT NULL AND total_no_published_research <> ''"; //This function will just show how many research inputted but not showing all the inputted variables because it's total_no_published_research is empty
                                    $select511 = mysqli_query($conn, $query511);

                                    if (mysqli_num_rows($select511) > 0) {
                                        while ($row = mysqli_fetch_assoc($select511)) {
                                            $total_no_published_research = $row['total_no_published_research'];
                                            $title = $row['title'];
                                            $author = $row['author'];
                                            $year_pub = $row['year_pub'];
                                            $no_clinical = $row['no_clinical'];
                                    ?>
                    
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of research on gender equality</span>
                                                <input type="text" class="form-control" value="<?php echo "$total_no_published_research" ?>"
                                                    readonly aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title</span>
                                                <input type="text" class="form-control" value="<?php echo "$title" ?>"
                                                    readonly aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Author</span>
                                                <input type="text" class="form-control" value="<?php echo "$author" ?>"
                                                    readonly aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Year Publication</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$year_pub" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of
                                                    Clinical</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_clinical" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--research 5.2.1-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.2.1</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportions of First-Generation Female Students</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score521">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.2.1`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_521 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Proportions of First-Generation 
                                    Female Students: <?php echo $totalRecord_521 ?></h3>
                                    <?php
                                    $json_data_521 = json_encode($totalRecord_521);
                                    $query521 = "SELECT * FROM `research5.2.1` WHERE no_starting_deg IS NOT NULL AND no_starting_deg <> ''"; //This function will just show how many research inputted but not showing all the inputted variables because it's no_starting_deg is empty
                                    $select521 = mysqli_query($conn, $query521);

                                    if (mysqli_num_rows($select521) > 0) {
                                        while ($row = mysqli_fetch_assoc($select521)) {
                                            $no_starting_deg = $row['no_starting_deg'];
                                            $no_first_start_deg = $row['no_first_start_deg'];
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    students starting a degree</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_starting_deg" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of
                                                    first-generation students starting a degree</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_first_start_deg" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.3.1-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.3.1</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Tracking Access Measures for Students</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score531">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.3.1`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_531 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Tracking Access Measures  
                                    for Students: <?php echo $totalRecord_531 ?></h3>
                                    <?php
                                    $json_data_531 = json_encode($totalRecord_531);
                                    $query531 = "SELECT * FROM `research5.3.1`";
                                    $select531 = mysqli_query($conn, $query531);

                                    if (mysqli_num_rows($select521) > 0) {
                                        while ($row = mysqli_fetch_assoc($select531)) {
                                            $no_college_applicants = $row['no_college_applicants'];
                                            $no_admitted = $row['no_admitted'];
                                            $no_enrollees = $row['no_enrollees'];
                                        
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number 
                                                    of college applicants</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_college_applicants" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of 
                                                    admitted college applicants</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_admitted" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number 
                                                    of enrollees</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_enrollees" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.3.2-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.3.2</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Tracking access measures for employees</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score532">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.3.2`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_532 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Tracking Access Measures  
                                    for Employees: <?php echo $totalRecord_532 ?></h3>
                                    <?php
                                    $json_data_532 = json_encode($totalRecord_532);
                                    $query532 = "SELECT * FROM `research5.3.2`";
                                    $select532 = mysqli_query($conn, $query532);

                                    if (mysqli_num_rows($select532) > 0) {
                                        while ($row = mysqli_fetch_assoc($select532)) {
                                            $no_job_applicants = $row['no_job_applicants'];
                                            $no_newly_hired = $row['no_newly_hired'];
                                        
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number 
                                                of job applicants</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_job_applicants" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of 
                                                    newly-hired employees by the campus</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_newly_hired" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.3.3-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.3.3</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Policy for women applications and entry</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score533">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.3.3`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_533 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Policy for women   
                                    applications and entry: <?php echo $totalRecord_533 ?></h3>
                                    <?php
                                    $json_data_533 = json_encode($totalRecord_533);
                                    $query533 = "SELECT * FROM `research5.3.3`";
                                    $select533 = mysqli_query($conn, $query533);

                                    if (mysqli_num_rows($select533) > 0) {
                                        while ($row = mysqli_fetch_assoc($select533)) {
                                            $no_women_applicants = $row['no_women_applicants'];
                                            $no_ppa = $row['no_ppa'];
                                        
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of women  
                                                    applications and entry policy</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_women_applicants" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of PPAs  
                                                    implemented in accordance to the policy</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.3.4-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.3.4</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Women's access schemes (Internal/External)</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score534">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.3.4`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_534 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Women's access  
                                        schemes (Internal/External): <?php echo $totalRecord_534 ?></h3>
                                    <?php
                                    $json_data_534 = json_encode($totalRecord_534);
                                    $query534 = "SELECT * FROM `research5.3.4` WHERE no_ppa_women IS NOT NULL AND no_ppa_women <> ''"; //This function will just show how many research inputted but not showing all the inputted variables because it's no_starting_deg is empty
                                    $select534 = mysqli_query($conn, $query534);

                                    if (mysqli_num_rows($select534) > 0) {
                                        while ($row = mysqli_fetch_assoc($select534)) {
                                            $no_ppa_women = $row['no_ppa_women'];
                                            $no_internal_ppa = $row['no_internal_ppa'];
                                            $no_external_ppa = $row['no_external_ppa'];
                                            $title_ppa = $row['title_ppa'];
                                            $description_ppa = $row['description_ppa'];
                                            $total_cost = $row['total_cost'];
                                            $fund_source = $row['fund_source'];
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of 
                                                    other PPAs exclusively for women</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_ppa_women" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of 
                                                    Internal PPAs</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_internal_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Number of 
                                                    External PPAs</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_external_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of 
                                                    the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$title_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Short description 
                                                    of the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$description_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total 
                                                    cost</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$total_cost" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund 
                                                    source</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$fund_source" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.3.5-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.3.5</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Women's application in underrepresented subjects</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score535">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.3.5`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_535 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Women's application   
                                        in underrepresented subjects: <?php echo $totalRecord_535 ?></h3>
                                    <?php
                                    $json_data_535 = json_encode($totalRecord_535);
                                    $query535 = "SELECT * FROM `research5.3.5` WHERE no_encourage_woman IS NOT NULL AND no_encourage_woman <> ''"; //This function will just show how many research inputted but not showing all the inputted variables because it's no_starting_deg is empty
                                    $select535 = mysqli_query($conn, $query535);

                                    if (mysqli_num_rows($select535) > 0) {
                                        while ($row = mysqli_fetch_assoc($select535)) {
                                            $no_encourage_woman = $row['no_encourage_woman'];
                                            $title_ppa = $row['title_ppa'];
                                            $description_ppa = $row['description_ppa'];
                                            $total_cost1 = $row['total_cost1'];
                                            $fund_source1 = $row['fund_source1'];
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of women's  
                                                    application in underrepresented subjects</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_encourage_woman" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of 
                                                    the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$title_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Short description 
                                                    of the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$description_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total 
                                                    cost</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$total_cost1" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund 
                                                    source</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$fund_source1" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.4.1-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.4.1</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of senior female academics</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score541">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.4.1`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_541 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Proportion    
                                    of senior female academics: <?php echo $totalRecord_541 ?></h3>
                                    <?php
                                    $json_data_541 = json_encode($totalRecord_541);
                                    $query541 = "SELECT * FROM `research5.4.1`";
                                    $select541 = mysqli_query($conn, $query541);

                                    if (mysqli_num_rows($select541) > 0) {
                                        while ($row = mysqli_fetch_assoc($select541)) {
                                            $no_employees = $row['no_employees'];
                                            $academic_teaching_staff = $row['academic_teaching_staff'];
                                            $senior_staff = $row['senior_staff'];
                                        
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number   
                                                    of employees</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_employees" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number   
                                                    of academic/teaching staff</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$academic_teaching_staff" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of   
                                                    senior academic staff</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$senior_staff" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.5.1-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.5.1</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of female graduates</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score551">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.5.1`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_551 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Proportion  
                                    of female graduates: <?php echo $totalRecord_551 ?></h3>
                                    <?php
                                    $json_data_551 = json_encode($totalRecord_551);
                                    $query551 = "SELECT * FROM `research5.5.1` WHERE total_graduates IS NOT NULL AND total_graduates <> ''"; //This function will just show how many research inputted but not showing all the inputted variables because it's total_no_published_research is empty
                                    $select551 = mysqli_query($conn, $query551);

                                    if (mysqli_num_rows($select551) > 0) {
                                        while ($row = mysqli_fetch_assoc($select551)) {
                                            $total_graduates = $row['total_graduates'];
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number   
                                                    of graduates</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$total_graduates" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.5.2-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.5.2</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Proportion of applicants for graduation to total number of graduates</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score552">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.5.2`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_552 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Proportion of applicants for  
                                    graduation to total number of graduates: <?php echo $totalRecord_552 ?></h3>
                                    <?php
                                    $json_data_552 = json_encode($totalRecord_552);
                                    $query552 = "SELECT * FROM `research5.5.2`";
                                    $select552 = mysqli_query($conn, $query552);

                                    if (mysqli_num_rows($select552) > 0) {
                                        while ($row = mysqli_fetch_assoc($select552)) {
                                            $applicants_for_graduation = $row['applicants_for_graduation'];
                                        
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of 
                                                    applicants for graduation</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$applicants_for_graduation" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.5.3-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.5.3</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Number of graduates by broad subject areas</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score553">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.5.3`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_553 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Number of graduates   
                                    by broad subject areas: <?php echo $totalRecord_553 ?></h3>
                                    <?php
                                    $json_data_553 = json_encode($totalRecord_553);
                                    $query553 = "SELECT * FROM `research5.5.3`";
                                    $select553 = mysqli_query($conn, $query553);

                                    if (mysqli_num_rows($select553) > 0) {
                                        while ($row = mysqli_fetch_assoc($select553)) {
                                            $total_no_STEM = $row['total_no_STEM'];
                                            $no_graduate_medicine = $row['no_graduate_medicine'];
                                            $no_art_humanities = $row['no_art_humanities'];
                                        
                                    ?>
                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of  
                                                    graduates in STEM</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$total_no_STEM" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of  
                                                    graduates in Medicine</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_graduate_medicine" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of graduates  
                                                    in Arts and Humanities/Social Sciences</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_art_humanities" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <!--research 5.6.1-->
                    <div class="d-inline-flex mt-3">
                        <div class="border border-dark w-100">
                            <div class=" d-inline-flex justify-content-start align-items-center">
                                <img src="../includes/img/goal-5.png" class="p-4 d-block" width="150" alt="">
                                <div class="d-grid ms-5 me-5">
                                    <p class="fw-normal">Target</p>

                                    <!--Number of in every research-->
                                    <h3 class="fw-bold">5.6.1</h3>

                                    <!--Name of in every research-->
                                    <h4 class="fw-bolder">Policy of non-discrimination against women</h4>
                                    <p></p>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-light dropdown-toggle float-end w-100" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">

                                    <!-- Eto para madisplay yung data sa sdg content-->
                                    <h3 class="text-start ms-3" id="score561">Score:</h3>

                                    <?php
                                    $sql = "SELECT COUNT(*) AS total FROM `research5.6.1`";
                                    $result = mysqli_query($conn, $sql);

                                    if (mysqli_num_rows($result) > 0) {
                                        $row = $result->fetch_assoc();
                                        $totalRecord_561 = $row['total'];
                                    }
                                    ?>
                                    <h3 class="text-start ms-3">Total number of published research on Policy of non-discrimination  
                                    against women: <?php echo $totalRecord_561 ?></h3>
                                    <?php
                                    $json_data_561 = json_encode($totalRecord_561);
                                    $query561 = "SELECT * FROM `research5.6.1` WHERE no_non_discrimination IS NOT NULL AND no_non_discrimination <> ''"; //This function will just show how many research inputted but not showing all the inputted variables because it's no_non_discrimination is empty
                                    $select561 = mysqli_query($conn, $query561);

                                    if (mysqli_num_rows($select561) > 0) {
                                        while ($row = mysqli_fetch_assoc($select561)) {
                                            $no_non_discrimination = $row['no_non_discrimination'];
                                            $no_ppa_implemented = $row['no_ppa_implemented'];
                                            $title_ppa = $row['title_ppa'];
                                            $description_ppa = $row['description_ppa'];
                                            $total_cost = $row['total_cost'];
                                            $fund_source = $row['fund_source'];
                                    ?>

                                    <div class="container d-grid mt-3">
                                        <div class="border border-dark p-3">

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of 
                                                    non-discrimination against women policy</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_non_discrimination" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total number of 
                                                    PPAs implemented in aacordance to the policy</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$no_ppa_implemented" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                            
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Title of 
                                                    the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$title_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Short description 
                                                    of the PPA</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$description_ppa" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total 
                                                    cost</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$total_cost" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>

                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Fund
                                                    source</span>
                                                <input type="text" class="form-control"
                                                    value="<?php echo "$fund_source" ?>" readonly
                                                    aria-label="Username" aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>