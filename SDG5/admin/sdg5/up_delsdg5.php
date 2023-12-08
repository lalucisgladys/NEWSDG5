<?php
include('../../includes/header.php');
include("../../includes/db.php");
?>
<?php if (isset($_GET['message'])) { ?>
<div class="message-container bg-success bg-gradient p-4">
    <a class="text-dark float-end text-uppercase text-decoration-none fs-3" href="#" id="closeBtn">&times;</a>
    <p class="text-center text-light p-2">
        <?php echo $_GET['message']; ?>
    </p>
</div>
<?php } ?>
<div class="container">
    <div class="row-mt-5">
        <?php
        include '../../includes/updatesdgdd/ddsdg5.php';
        ?>

        <!--res 5.1.1-->
        <div class=" w-100 h-auto mt-3" id="research511" style="display: block ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of research on gender equality</th>
                        <th scope="col">Title</th>
                        <th scope="col">Author</th>
                        <th scope="col">Year Publication</th>
                        <th scope="col">Number of Clinical Citations</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.1.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res511 = $row['ID'];
                            $total_no_published_research = $row['total_no_published_research'];
                            $title = $row['title'];
                            $author = $row['author'];
                            $year_pub = $row['year_pub'];
                            $no_clinical = $row['no_clinical'];
                    ?>
                    <tr>
                        <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete511.php?delete=<?php echo $id_res511 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update511.php?update=<?php echo $id_res511 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $total_no_published_research ?></td>
                        <td class="text-center"><?php echo $title ?></td>
                        <td class="text-center"><?php echo $author ?></td>
                        <td class="text-center"><?php echo $year_pub ?></td>
                        <td class="text-center"><?php echo $no_clinical ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 5.2.1-->
        <div class=" w-100 h-auto mt-3" id="research521" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of students starting a degree</th>
                        <th scope="col">Total number of first-generation students starting a degree</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.2.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res521 = $row['ID'];
                            $no_starting_deg = $row['no_starting_deg'];
                            $no_first_start_deg = $row['no_first_start_deg'];

                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete521.php?delete=<?php echo $id_res521 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update521.php?update=<?php echo $id_res521 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_starting_deg ?></td>
                        <td class="text-center"><?php echo $no_first_start_deg ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 5.3.1-->
        <div class=" w-100 h-auto mt-3" id="research531" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of college applicants</th>
                        <th scope="col">Total number of admitted college applicants</th>
                        <th scope="col">Total number of enrollees</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.3.1`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res531 = $row['ID'];
                            $no_college_applicants = $row['no_college_applicants'];
                            $no_admitted = $row['no_admitted'];
                            $no_enrollees = $row['no_enrollees'];

                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete531.php?delete=<?php echo $id_res531 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update531.php?update=<?php echo $id_res531 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_college_applicants ?></td>
                        <td class="text-center"><?php echo $no_admitted ?></td>
                        <td class="text-center"><?php echo $no_enrollees ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 5.3.2-->
        <div class=" w-100 h-auto mt-3" id="research532" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of job applicants</th>
                        <th scope="col">Total number of newly-hired employees by the campus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.3.2`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res532 = $row['ID'];
                            $no_job_applicants = $row['no_job_applicants'];
                            $no_newly_hired = $row['no_newly_hired'];

                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete532.php?delete=<?php echo $id_res532 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update532.php?update=<?php echo $id_res532 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_job_applicants ?></td>
                        <td class="text-center"><?php echo $no_newly_hired ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!--res 5.3.3-->
        <div class=" w-100 h-auto mt-3" id="research533" style="display: none ;">
            <table class="table table-striped table-bordered table-hover ">
                <thead class="table-dark text-center">
                    <tr>
                        <th scope="col" colspan="2">Action</th>
                        <th scope="col">Total number of women applications and entry policy</th>
                        <th scope="col">Total number of PPAs implemented in accordance to the policy</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM `research5.3.3`";
                    $select = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($select) > 0) {
                        while ($row = mysqli_fetch_assoc($select)) {
                            $id_res533 = $row['ID'];
                            $no_women_applicants = $row['no_women_applicants'];
                            $no_ppa = $row['no_ppa'];

                    ?>
                    <tr>
                    <td class="text-center">
                            <a href="../../admin/sdg5/delete/delete533.php?delete=<?php echo $id_res533 ?>"
                                class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this?')">Delete</a>
                        </td>
                        <td class="text-center">
                            <a href="../../admin/sdg5/update/update533.php?update=<?php echo $id_res533 ?>"
                                class="btn btn-success">Update</a>
                        </td>
                        <td class="text-center"><?php echo $no_women_applicants ?></td>
                        <td class="text-center"><?php echo $no_ppa ?></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script>
//button
var btn_res511 = document.getElementById("res511");
var btn_res521 = document.getElementById("res521");

//div
var div_res511 = document.getElementById("research511");
var div_res521 = document.getElementById("research521");

//button
var btn_res531 = document.getElementById("res531");
var btn_res532 = document.getElementById("res532");

//div
var div_res531 = document.getElementById("research531");
var div_res532 = document.getElementById("research532");

//button
var btn_res533 = document.getElementById("res533");
var btn_res534 = document.getElementById("res534");

//div
var div_res533 = document.getElementById("research533");
var div_res534 = document.getElementById("research534");

//button
var btn_res535 = document.getElementById("res535");
var btn_res541 = document.getElementById("res541");

//div
var div_res535 = document.getElementById("research535");
var div_res541 = document.getElementById("research541");

//button
var btn_res551 = document.getElementById("res551");
var btn_res552 = document.getElementById("res552");

//div
var div_res551 = document.getElementById("research551");
var div_res552 = document.getElementById("research552");

//button
var btn_res553 = document.getElementById("res553");
var btn_res554 = document.getElementById("res554");

//div
var div_res553 = document.getElementById("research553");
var div_res554 = document.getElementById("research554");

//button
var btn_res561 = document.getElementById("res561");
var btn_res562 = document.getElementById("res562");

//div
var div_res561 = document.getElementById("research561");
var div_res562 = document.getElementById("research562");

//button
var btn_res563 = document.getElementById("res563");
var btn_res564 = document.getElementById("res564");

//div
var div_res563 = document.getElementById("research563");
var div_res564 = document.getElementById("research564");

//button
var btn_res565 = document.getElementById("res565");
var btn_res566 = document.getElementById("res566");

//div
var div_res565 = document.getElementById("research565");
var div_res566 = document.getElementById("research566");

//button
var btn_res567 = document.getElementById("res567");
var btn_res568 = document.getElementById("res568");

//div
var div_res567 = document.getElementById("research567");
var div_res568 = document.getElementById("research568");

//button
var btn_res569 = document.getElementById("res569");
var btn_res5610 = document.getElementById("res5610");

//div
var div_res569 = document.getElementById("research569");
var div_res5610 = document.getElementById("research5610");

//button
var btn_res571 = document.getElementById("res571");
var btn_res572 = document.getElementById("res572");

//div
var div_res571 = document.getElementById("research571");
var div_res572 = document.getElementById("research572");

//button
var btn_res573 = document.getElementById("res573");
var btn_res574 = document.getElementById("res574");

//div
var div_res573 = document.getElementById("research573");
var div_res574 = document.getElementById("research574");

//button
var btn_res575 = document.getElementById("res575");
var btn_res576 = document.getElementById("res576");

//div
var div_res575 = document.getElementById("research575");
var div_res576 = document.getElementById("research576");

//button
var btn_res5761 = document.getElementById("res5761");
var btn_res5762 = document.getElementById("res5762");

//div
var div_res5761 = document.getElementById("research5761");
var div_res5762 = document.getElementById("research5762");

//button
var btn_res581 = document.getElementById("res581");
var btn_res582 = document.getElementById("res582");

//div
var div_res581 = document.getElementById("research581");
var div_res582 = document.getElementById("research582");

//button
var btn_res591 = document.getElementById("res591");
var btn_res592 = document.getElementById("res592");

//div
var div_res591 = document.getElementById("research591");
var div_res592 = document.getElementById("research592");

//button
var btn_res593 = document.getElementById("res593");
var btn_res594 = document.getElementById("res594");

//div
var div_res593 = document.getElementById("research593");
var div_res594 = document.getElementById("research594");

//button
var btn_res5101 = document.getElementById("res5101");
var btn_res5111 = document.getElementById("res5111");

//div
var div_res5101 = document.getElementById("research5101");
var div_res5111 = document.getElementById("research5111");

btn_res511.addEventListener('click', () => {
    div_res511.style.display = "block";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res521.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "block";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res531.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "block";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res532.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "block";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res533.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "block";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res534.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "block";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res535.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "block";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res541.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "block";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res551.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "block";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res552.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "block";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res553.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "block";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res554.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "block";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res561.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "block";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res562.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "block";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res563.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "block";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res564.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "block";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res565.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "block";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res566.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "block";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res567.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "block";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res568.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "block";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res5610.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "block";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res571.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "block";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res572.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "block";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res573.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "block";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res574.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "block";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res575.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "block";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res576.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "block";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res5761.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "block";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res5762.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "block";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res581.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "block";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res582.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "block";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res591.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "block";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res592.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "block";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res593.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "block";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";
});

btn_res594.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "block";
    div_res5101.style.display = "none";
    div_res5111.style.display = "none";

});

btn_res5101.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "block";
    div_res5111.style.display = "none";

});

btn_res5101.addEventListener('click', () => {
    div_res511.style.display = "none";
    div_res521.style.display = "none";
    div_res531.style.display = "none";
    div_res532.style.display = "none";
    div_res533.style.display = "none";
    div_res534.style.display = "none";
    div_res535.style.display = "none";
    div_res541.style.display = "none";
    div_res551.style.display = "none";
    div_res552.style.display = "none";
    div_res553.style.display = "none";
    div_res554.style.display = "none";
    div_res561.style.display = "none";
    div_res562.style.display = "none";
    div_res563.style.display = "none";
    div_res564.style.display = "none";
    div_res565.style.display = "none";
    div_res566.style.display = "none";
    div_res567.style.display = "none";
    div_res568.style.display = "none";
    div_res5610.style.display = "none";
    div_res571.style.display = "none";
    div_res572.style.display = "none";
    div_res573.style.display = "none";
    div_res574.style.display = "none";
    div_res575.style.display = "none";
    div_res576.style.display = "none";
    div_res5761.style.display = "none";
    div_res5762.style.display = "none";
    div_res581.style.display = "none";
    div_res582.style.display = "none";
    div_res591.style.display = "none";
    div_res592.style.display = "none";
    div_res593.style.display = "none";
    div_res594.style.display = "none";
    div_res5101.style.display = "none";
    div_res5111.style.display = "block";

});
document.addEventListener("DOMContentLoaded", function() {
    var closeBtn = document.getElementById("closeBtn");

    if (closeBtn) {
        closeBtn.addEventListener("click", function(event) {
            event.preventDefault();
            var messageContainer = document.querySelector(".message-container");
            messageContainer.style.display = "none";
            window.location.href = "formsdg5.php";
        });
    }
});

//for exit in message
document.addEventListener("DOMContentLoaded", function() {
    var closeBtn = document.getElementById("closeBtn");

    if (closeBtn) {
        closeBtn.addEventListener("click", function(event) {
            event.preventDefault();
            var messageContainer = document.querySelector(".message-container");
            messageContainer.style.display = "none";
            window.location.href = "up_delsdg5.php";
        });
    }
});
</script>