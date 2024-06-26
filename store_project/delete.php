<?php
$conn = new mysqli("localhost", "root", "", "store");
if (isset($_GET['id'])) {
    //  echo "deleteeeeeeeeeeeeeeee";


    $idd = $_GET['id'];


    $sqldelete = "DELETE FROM products WHERE id='$idd' ";
    if ($conn->query($sqldelete) === TRUE) {
        $msgtype = "alert-danger";
        $msg = "product deleted..";
        echo "deleted successfulssly";
    } else {
        echo "Error:" . $sqldelete . "<br>" . $conn->error;
    }
}
