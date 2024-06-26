<?php

// ^ connection using functions
// ! dont forget to change database name to try using this file

$conn = mysqli_connect("localhost", "root", "", "wasila");
if (!$conn) {
    die("connection failed :" . mysqli_connect_error());
}
echo "connect success";
?>

<!-- another way using class -->

<?php

$conn = new mysqli("localhost", "root", "", "wasila");
if ($conn->connect_error) {
    die("connection failed :"  . $conn->connect_error);
}

echo "<br>connect success  using class";

?>