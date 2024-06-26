<?php

// validation value set

// type	Required. The input type to check for. Can be one of the following:
//     INPUT_GET
//     INPUT_POST
//     INPUT_COOKIE
//     INPUT_SERVER
//     INPUT_ENV
// variable	Required. The variable name to check
if( isset($_POST['check'])){

 

if (filter_has_var(INPUT_POST, 'email')  )  //function check if email found or not  ... it takes two parameter first type of variable second variable
{
    //found
    $email = $_POST['email'];
 


    //check if email right

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) //FILTER_VALIDATE_EMAIL check email format example@gmail.com
    {
        echo "the email is correct ";
        echo '<br>';
    } else {
        echo "email not right ";
        echo '<br>';
        echo 'the right email is: ' . filter_var($email, FILTER_SANITIZE_EMAIL);  // FILTER_SANITIZE_EMAIL to return the correct format for email 
        echo '<br>';

        // // before using output is -> ahmedzaitoon4@g<><><mail.com
        //after using outut is -> the right email is:ahmedzaitoon4@gmail.com

    }
} else {
    echo "not found email ";
    echo '<br>';
}

}
// filter_validate_integer   -> check the input if integer or not

// $age="23ESDD3d3534R2";
$AGE = "20";
if (filter_var($AGE, FILTER_VALIDATE_INT)) {
    // echo "integer";
} else {
    // echo gettype($age);
    echo filter_var($AGE, FILTER_SANITIZE_NUMBER_INT);  //GET ALL number from string remove any char
}




?>



<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <label for="email" name="email">Email</label>
    <input type="text" name="email" id="email">
    <button type="submit" name="check">check</button>
</form>


<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
        foreach (filter_list() as $id => $filter) {
            echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
        }
        ?>
    </table>

</body>

</html>