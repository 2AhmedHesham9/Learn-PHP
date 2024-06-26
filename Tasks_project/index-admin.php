<?php

include 'adminClass.php';
$obeject = new Tasks;
$tablename = "tasks";
if (isset($_POST['uploadd'])) {

    $obeject->addtask($tablename);
    // header("Location: " . $_SERVER['PHP_SELF']);
}






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ADMIN</title>
    <link rel="stylesheet" href="../store\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>


    <form action="" method="post" id="form1">

        <a class="btn btn-primary mt-3 ml-5" name="dispaly" href="dashboard.php" target="_blank">Display Data</a>

    </form>
    <p class="display-4 mt-3 ml-3">ADD Task</p>
    <hr>
    <div class="<?php echo 'alert ' . $obeject->msgtype; ?>" role="alert">
        <?php echo $obeject->msg; ?>
    </div>

    <div class="container">
        <form class="form" id="myForm" method="post" enctype="multipart/form-data">
            <input class="input" type="file" name="uploadfile" value="" placeholder="add image" required />
            <input name="namep" type="text" class="input" placeholder="Enter Task Name" required>
            <label for="" style="color: white;font-size:20px;margin-left:3px">Start From:</label>
            <input name="from" type="date" class="input" placeholder="FROM" required>
            <label for="" style="color: white;font-size:20px;margin-left:3px">TO:</label>
            <input name="to" type="date" class="input" placeholder="TO" required>
            <input name="taskname" type="text" class="input" placeholder="Task Name" required>


            <button type="submit" name="uploadd" onclick="refresh()">Submit</button>
        </form>

    </div>





</body>

</html>