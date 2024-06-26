

<?php
session_start();
echo $_SESSION['name'];
echo '<br>';
echo $_SESSION['email'];
if(isset($_POST['logout']))
{
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    // session_unset();
    // session_destroy();
    header('location: session.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <form action="" method="post">
    <button name="logout" type="submit">Logout</button>
    </form>
    
</body>
</html>

<!-- COOKIESsssssssssssssssssssssssssssssssssssssssssssssssssss -->
