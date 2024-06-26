<?php
$conn = new mysqli("localhost", "root", "", "general_ToDOTasks");
if (isset($_GET['id'])) {
    // echo "deleteeeeeeeeeeeeeeee";


    $idd = $_GET['id'];


    $sqldelete = "DELETE FROM tasks WHERE id='$idd' ";
    if ($conn->query($sqldelete) === TRUE) {
        header('location:index-admin.php');
        $msgtype = "alert-danger";
        $msg = "task deleted..";
        echo "deleted successfully";
    } else {
        echo "Error:" . $sqldelete . "<br>" . $conn->error;
    }
}
