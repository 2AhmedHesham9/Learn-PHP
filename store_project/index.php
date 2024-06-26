<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
include 'clases.php';

//    using class product

$obeject = new products;

if (isset($_POST['upload'])) {
    $obeject->addproduct("products");
}
if (isset($_GET['delete'])) {
    $obeject->delete();
}

?>
<?php
if (isset($_POST['dispaly'])) {
    $tablename = "products";
    $checkexistTable = $obeject->displayproduct($tablename);
    if ($checkexistTable === False) {
        $this->msgtype = "alert-danger";
        $this->msg = "Table not found ..";
        // die;
    } else {
?>

        <div style="margin-left:15%">
            <form action="" method="GET">
                <table class="table table-striped table-dark ml-5 mt-3" style="width:80%;">
                    <thead>
                        <tr>
                            <th scope="col" style="text-align:center">#</th>
                            <th scope="col" style="text-align:center">Image</th>
                            <th scope="col" style="text-align:center">productName</th>
                            <th scope="col" style="text-align:center">productPrice</th>
                            <th scope="col" style="text-align:center">productserial</th>
                            <th scope="col" style="text-align:center">productCountry</th>
                            <th scope="col" style="text-align:center">Actions</th>

                        </tr>
                    </thead>
                    <?php

                    $sqldisplay = "SELECT * FROM $tablename";
                    $result = $obeject->connection()->query($sqldisplay);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) { ?>

                            <tbody>
                                <tr>

                                    <td><?php echo $row['id'] ?></td>
                                    <td>
                                        <img src="<?php echo './images/' . $row['imagepath']; ?>" width="120px" height="130px" style=" object-fit:cover;">
                                    </td>
                                    <td style="text-align:center;center;padding-top:6%;"><?php echo $row['name']; ?></td>
                                    <td style="text-align:center;center;padding-top:6%;"><?php echo $row['price']; ?></td>
                                    <td style="text-align:center;center;padding-top:6%;"><?php echo $row['serialnumber']; ?></td>
                                    <td style="text-align:center;center;padding-top:6%;"><?php echo $row['made_in']; ?></td>
                                    <td style="text-align:center;center;padding-top:6%;"><a class="btn btn-info" href="edit.php?id=<?php
                                                                                                                                    echo $row['id'];
                                                                                                                                    ?>">Edit</a>&nbsp;
                                        <a class="btn btn-danger" href="delete.php?id=<?php
                                                                                        echo $row['id'];
                                                                                        ?>">Delete</a>&nbsp;
                                        <!-- <button class="btn btn-danger" onclick="<?php $this->delete($row['id']) ?>" name="del" type="submit" ><?php echo $row['id']; ?></button> -->
                                    </td>


                                </tr>

                        <?php }
                    } else {
                        echo "No data";
                    }
                        ?>
                            </tbody>
                </table>
            </form>

        </div>
<?php }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ADD product</title>

</head>

<body>
    <form action="" method="post" id="form1">
        <button type="submit" class="btn btn-primary mt-3 ml-5" name="dispaly">Display Data</button>
    </form>
    <p class="display-4 mt-3 ml-3">ADD product</p>
    <hr>
    <div class="<?php echo 'alert ' . $obeject->msgtype; ?>" role="alert">
        <?php echo $obeject->msg; ?>
    </div>
    <div class="container">
        <form class="form" method="post" enctype="multipart/form-data">
            <input class="input" type="file" name="uploadfile" value="" placeholder="add image" required />
            <input name="namep" type="text" class="input" placeholder="Enter name" required onkeydown="return /[a-zA-Z]/i.test(event.key)">
            <input name="price" type="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" class="input" placeholder="Enter Price" required>
            <input name="serial" type="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" class="input" placeholder="Enter serial number" required>
            <input name="country" type="text" class="input" placeholder="Made in" required onkeydown="return /[a-zA-Z]/i.test(event.key)">


            <button type="submit" name="upload">Submit</button>
        </form>

    </div>




</body>

</html>