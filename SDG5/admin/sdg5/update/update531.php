<?php include '../../../includes/db.php';
include '../../../includes/header.php';

if (isset($_GET['update'])) {
    $id = $_GET['update'];

    if (isset($_POST['submit'])) {
        $no_college_applicants = $_POST['no_college_applicants'];
        $no_admitted = $_POST['no_admitted'];
        $no_enrollees = $_POST['no_enrollees'];

        $update_query = "UPDATE `research5.3.1`
        SET no_college_applicants = '$no_college_applicants', no_admitted = '$no_admitted', no_enrollees = '$no_enrollees'
        WHERE id = $id";
        $update = mysqli_query($conn, $update_query);

        if ($update) {
            header("Location:../../../admin/sdg5/up_delsdg5.php?message=Update Successful");
        }
    }
    $sql = "SELECT * FROM `research5.3.1` WHERE ID = '$id'";
    $select = mysqli_query($conn, $sql);

    if (mysqli_num_rows($select) > 0) {
        while ($row = mysqli_fetch_assoc($select)) {
            $no_college_applicants = $row['no_college_applicants'];
            $no_admitted = $row['no_admitted'];
            $no_enrollees = $row['no_enrollees'];
?>
<div class=" w-100 h-auto" id="research531" style="display: block;">
                        <h2 class="text-center pb-4"> Tracking access measures for students</h2>
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of college applicants" name="no_college_applicants" value="<?php echo "$no_college_applicants"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of admitted college applicants" name="no_admitted" value="<?php echo "$no_admitted"?>">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class=""></i></span>
                                <input type="text" class="form-control" placeholder="Total number of enrollees" name="no_enrollees" value="<?php echo "$no_enrollees"?>">
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-success mb-3" name="submit">Update</button>
                            </div>
                        </form>
                    </div>
        </div>
<?php
        }
    }
}
?>