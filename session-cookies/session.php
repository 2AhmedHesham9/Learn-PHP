<?php
//   safe data from page to page by server

// sessions more secure  than cookies



session_start();
var_dump($_POST);
if(isset($_POST['submit']))
{
    $_SESSION['name']=$_POST['name'];
    $_SESSION['email']=$_POST['email'];
    header('location: page.php');

}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSIONS</title>
    <style>
        body {
            margin:150px auto;
            width:70%
        }
        form {
            border: 2px dotted blue;
            padding:30px;
            background-color:gray;
        }
    </style>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name">

        <label for="email">Email</label>
        <input type="text" name="email">
 
       
        <button type="submit" name="submit">submit</button>


    </form>
    
</body>
</html>