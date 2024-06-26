<?php

include 'adminClass.php';
$object = new Tasks();
$tablename = "tasks";


$data = $object->displaytask($tablename);

if (isset($_GET['id'])) {
    $object->delete();
    $data=$object->displaytask($tablename); // to set the new data for display
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Dashboard</title>


</head>

<body>
    <div class="<?php echo 'alert ' . $object->msgtype; ?>" role="alert">
        <?php echo $object->msg; ?>
    </div>

    <?php
    if ($data) { ?>

        <div style="margin-left:15%">
            <form action="" method="GET">
                <table class="table table-striped table-dark ml-5 mt-3" style="width:80%;">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align:center;align-items:center">#id</th>
                            <th scope="col" style="text-align:center">Image</th>
                            <th scope="col" style="text-align:center">Name</th>
                            <th scope="col" style="text-align:center">From</th>
                            <th scope="col" style="text-align:center">To</th>
                            <th scope="col" style="text-align:center">Task Name</th>
                            <th scope="col" style="text-align:center">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        // $sqldisplay = "SELECT * FROM $tablename";
                        $result = $data; //$obeject->getConnection()->query($sqldisplay);


                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>



                                <tr>

                                    <td style="text-align:center;padding-top:6%;"><?php echo $row['id'] ?></td>
                                    <td><img src="<?php echo 'images/' . $row['imagepath']; ?>" width="120px" height="130px" style="object-fit: cover;"></td>
                                    <td style="text-align:center;padding-top:6%;"><?php echo $row['name']; ?></td>
                                    <td style="text-align:center;padding-top:6%;"><?php echo $row['from']; ?></td>
                                    <td style="text-align:center;padding-top:6%;"><?php echo $row['to']; ?></td>
                                    <td style="text-align:center;padding-top:6%;"><?php echo $row['taskname']; ?></td>
                                    <td style="text-align:center;padding-top:6%;">
                                        <a class="btn btn-info" href="edit.php?id=<?php echo $row['id'] ?>">Edit</a>&nbsp;
                                        <a class="btn btn-danger" name="delete" href="?id=<?php echo $row['id']  ?>">Delete</a>&nbsp;

                                    </td>


                                </tr>

                        <?php };
                        } else {
                             
                            echo  "<script>alert('No Data to display')</script>";
                        }
                        ?>
                    </tbody>
                </table>
            </form>

        </div>
    <?php } ?>


</body>

</html>