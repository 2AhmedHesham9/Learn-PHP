<?php
//  cookies  safe data on browser or client.
if(isset($_POST['submit']))
{
    setcookie('username',$_POST['name'],time()+3600);
    header('location:cookiespage.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies Sample</title>
    <style>
        body{
            margin:70px auto;
            width:50%;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

    <label for="name">Name</label>
    <input type="text" name="name">
    <button type="submit" name="submit">Save Cookies</button>

</form>
    
</body>
</html>