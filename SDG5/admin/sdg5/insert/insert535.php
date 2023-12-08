<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $no_encourage_woman = $_POST['no_encourage_woman'];
    $title_ppa = $_POST['title_ppa'];
    $description_ppa = $_POST['description_ppa'];
    $total_cost1 = $_POST['total_cost1'];
    $fund_source1 = $_POST['description_ppa'];


    $query = "INSERT INTO `research5.3.5` (no_encourage_woman, title_ppa, description_ppa, total_cost1, fund_source1) VALUES ('$no_encourage_woman', '$title_ppa', '$description_ppa', '$total_cost1', '$fund_source1')";
    $insert = mysqli_query($conn,$query);

    if($insert){
        header("Location:../../../admin/sdg5/formsdg5.php?message=Insert Successful");
    }else if(!$insert){
        die("Query failed. " . mysqli_error($conn));
    }
}
else {
    echo "Invalid request method";
}

?>