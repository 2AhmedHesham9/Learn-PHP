<?php

include('adminClass.php');

$object = new Tasks();
$tablename = "tasks";
$data = $object->displaytask($tablename);

if (isset($_GET['id'])) {
  $object->delete();
  $data = $object->displaytask($tablename); // to set the new data for display
}


if (isset($_GET['id'])) {
  $object->delete();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GENERAL TASKS</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <form class="plan-chooser" id="form1">
    <div class="header">
      <span class="title">Your Taskes</span>
      <p class="desc">Do not forget to do all..</p>
      <br>
    </div>

    <?php


    if ($data->num_rows > 0) {
      while ($row = $data->fetch_assoc()) {  ?>
        <div class="grid-containerr">
          <div class="plan-option">
            <input value="free" id="free<?php echo $row['id']; ?>" name="plan" type="radio">
            <label for="free<?php echo $row['id']; ?>">

              <div class="plan-info">
                <span class="plan-cost"><?php echo $row['taskname']; ?></span>
                <span class="plan-name" style="display:inline;">
                  <h2>From:</h2>
                </span>
                <p><?php echo $row['from']; ?></p>
                <span class="plan-name">
                  <h2>To:</h2>
                </span>
                <p><?php echo $row['to']; ?></p>
              </div>
              <span class=""> <img src="images/<?php echo $row['imagepath']; ?>" alt="image" width="150px"><br><?php echo $row['name']; ?> </span>

            </label>
          </div>
          <a href="index.php ?id=<?php
                                  echo $row['id'];
                                  ?>" class="choose-btn" name="done"> DONE </a>

          <br>
          <br>
          <!-- //! does not implemented -->
          <a href="#" title="" class="choose-btn" name> In Progress </a> 

        </div>
    <?php }
    }else{ ?>
          <p class="desc">You don't have any tasks to do..</p>
          <?php } ?>
    
  </form>

</body>

</html>