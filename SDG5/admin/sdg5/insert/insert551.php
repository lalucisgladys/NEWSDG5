<?php
include '../../../includes/db.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $total_graduates = $_POST['total_graduates'];


    $query = "INSERT INTO `research5.5.1` (total_graduates) VALUES ('$total_graduates')";
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