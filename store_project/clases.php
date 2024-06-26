<?php

// connection 

// $conn =new mysqli("localhost","root","","store");

// if($conn->connect_error)
// {
//     die("connection failed :" .$conn->connect_error);
// }

// echo "connected succeddfully";

class products
{

    // public $id;
    public $filename;
    public $tempname;
    public $folder;
    public $productname;
    public $productprice;
    public $productserial;
    public $productcountry;
    public $msgtype = "";
    public $msg = "";

    // return connection
    function connection()
    {
        return new mysqli("localhost", "root", "", "store");
    }


    //insert function 
    function addproduct($tablename)
    {





        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder =  './images/' . $filename;
        $this->productname = $_POST['namep'];
        $this->productprice = $_POST['price'];
        $this->productserial = $_POST['serial'];
        $this->productcountry = $_POST['country'];

        // to check if image uploade or not and take it to folder imagess

        if (move_uploaded_file($tempname, $folder)) {
            // echo "<h3> Image uploaded successfully!</h3>";
        } else {
            echo "<h3> Failed to upload image!</h3>";
        }

        $sqlinsert = "INSERT INTO $tablename (imagepath,name, price,serialnumber,made_in)
            VALUES ('$filename',' $this->productname','$this->productprice','$this->productserial',' $this->productcountry')";

        if ($this->connection()->query($sqlinsert) === TRUE) {
            $this->msgtype = "alert-success";
            $this->msg = "product added successfully..";
        } else {
            echo "Error: " . $sqlinsert . "<br>" . $this->connection()->error;
            $this->msgtype = "alert-danger";
            $this->msg = "product not added ..";
        }
    }
    // display function
    function displayproduct($tablename)
    {

        $exist = $this->connection()->query("SELECT * FROM $tablename");
        return $exist;



    }

    // function delete
    function delete()
    {

        if (isset($_GET['id'])) {

            $idd = $_GET['id'];

            $sqldelete = "DELETE FROM `products` WHERE `id`=$idd ";
            if ($this->connection()->query($sqldelete) === TRUE) {
                $this->msgtype = "alert-danger";
                $this->msg = "product deleted..";
                // header("Location: " . $_SERVER['PHP_SELF']);
            } else {
                echo "Error:" . $sqldelete . "<br>" . $this->connection()->error;
            }
        }
    }
}






?>