<?php
// var_dump($_POST);  // it prints the all data in the form

// msg -> message & msgtype -> message type that send to alert (danger ,success)
$msg = '';
$msgtype = '';
// isset() -> check if clicked on submit button
//  $_POST the type of method form
// sendEmail the name of submit button
if (isset($_POST['sendEmail'])) {

    // make variables to get values from form input name ,email and body
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['body'];
    // check if if one of them empty then give value to msg and msgtype
    if (empty($name) || empty($email) || empty($body)) {
        $msg = "please fill all fields!";
        $msgtype = "alert-danger";
    } else {

        // check if you have an input has a name (name and email and body) || input_post is the Input Type (post or get)
        if ((filter_has_var(INPUT_POST, 'name') &&
            (filter_has_var(INPUT_POST, 'email')) &&
            (filter_has_var(INPUT_POST, 'body')))) {

            // filter email check if it writes correct atsh@gmail.com then give value to msg and msgtype
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "Email Sent Successfully..";
                $msgtype = "alert-success";
            } else {
                $msg = "Email is Wrong";
                $msgtype = "alert-danger";
            }
        }
    }
}
?>





<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Contact Form</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <a href="#" class="navbar-brand" style="margin-left:30px;">Contact</a>

    </nav>
    <!-- check if message not empty to get the message and message type -->
    <?php if ($msg) : ?>
        <div class="<?php echo 'alert ' . $msgtype; ?>">
            <?php echo $msg; ?>
        </div>
    <?php endif; ?>


    <div class="container">
        <h4 class="display-5 mt-3">Contact Form</h4>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" checked value="<?php if (isset($name) && $msg != "Email Sent Successfully..") echo htmlspecialchars($name); ?>">
                <!-- htmlspecialchars to make input save value after click submit cause refresh page when erorr exists -->

            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" checked value="<?php if (isset($email) && $msg != "Email Sent Successfully..") echo htmlspecialchars($email);   ?>">

            </div>
            <div class="form-group">
                <label for="body">Email Body</label>
                <textarea name="body" cols="30" rows="10" class="form-control" checked><?php if (isset($body) && $msg != "Email Sent Successfully..") echo htmlspecialchars($body); ?></textarea>

            </div>
            <br>
            <div class="form-group">
                <button name="sendEmail" type="submit" class="btn btn-primary">Send</button>

            </div>
        </form>
    </div>
</body>

</html>