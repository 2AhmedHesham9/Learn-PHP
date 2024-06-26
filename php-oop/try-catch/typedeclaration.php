<?php
// strict_types to check if the input type is correct num chars or string 
// anything as input in function
declare(strict_types=1); // to check type of data 1 -> true    
include "index.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>try-catch</title>
</head>

<body>
  <?php

  $p = new ahmed;
  try {
    $p->setname("ATSH");
    // $p->setname(1); //get error because number
    echo $p->getname();
  } catch (TypeError $e) {
    echo "Error" . $e->getMessage();
  }


  ?>


</body>

</html>