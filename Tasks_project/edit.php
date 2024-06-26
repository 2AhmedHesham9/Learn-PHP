<?php
include 'adminClass.php';
$obeject = new Tasks;
$tablename = "tasks";
$data = $obeject->getDataToUpdate();
if (isset($_POST['update'])) {
    $obeject->update();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UBDATE DATA</title>
</head>

<body>
    <div class="<?php echo 'alert ' . $obeject->msgtype; ?>" role="alert">
        <?php echo $obeject->msg; ?>
    </div>
    <div class="container">
        <form action="" method="post">
            <fieldset class="container">
                <h2> Update Form</h2>
                <!-- <legend>Task information:</legend> -->

                Name:<br>
                <input class="input" type="text" name="name" value="<?php echo $data['name']; ?>">
                <br>
                FROM:<br>
                <input class="input" type="date" name="from" value="<?php echo  $data['from']; ?>">
                <br>

                TO:<br>
                <input class="input" type="date" name="to" value="<?php echo $data['to']; ?>">
                <br>
                Task Name:
                <br>
                <input class="input" type="text" name="taskname" value="<?php echo $data['taskname']; ?>">



                <br><br>
                <input type="submit" class="button" value="Update" name="update">
            </fieldset>

        </form>
    </div>
</body>

</html>