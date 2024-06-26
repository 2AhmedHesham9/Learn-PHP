<?php

class Tasks
{

    // public $id;
    private $filename;
    private $tempname;
    private $folder;
    private $namep;
    private $from;
    private $to;
    private $taskname;
    public $msgtype = "";
    public $msg = "";
    private $conn;
    // return connection
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "general_ToDOTasks");
    }
    public function getConnection()
    {
        return $this->conn;
    }

    //insert function 
    function addtask($tablename)
    {
        $this->filename = $_FILES["uploadfile"]["name"];
        $this->tempname = $_FILES["uploadfile"]["tmp_name"];
        $this->folder =  './images/' . $this->filename;
        $this->namep = $_POST['namep'];
        $this->from = $_POST['from'];
        $this->to = $_POST['to'];
        $this->taskname = $_POST['taskname'];

        // to check if image uploade or not and take it to folder images

        if (move_uploaded_file($this->tempname, $this->folder)) {
            // echo "<h3> Image uploaded successfully!</h3>";
        } else {
            echo "<h3> Failed to upload image!</h3>";
        }

        $sqlinsert = "INSERT INTO $tablename (`imagepath`,`name`, `from`,`to`,`taskname`)
                    VALUES ('$this->filename',' $this->namep','$this->from','$this->to',' $this->taskname')";

        if ($this->conn->query($sqlinsert) === TRUE) {
            $this->msgtype = "alert-success";
            $this->msg = "Task added successfully..";
        } else {
            echo "Error: " . $sqlinsert . "<br>" . $this->conn->error;
            $this->msgtype = "alert-danger";
            $this->msg = "Task does not added ..";
        }
    }
    // display function
    function displaytask($tablename)
    {

        $exist = $this->conn->query("SELECT * FROM $tablename");
        if ($exist === False) {
            $this->msgtype = "alert-danger";
            $this->msg = "Table not found ..";
            return false;
        }
        return $exist;
    }

    // function delete
    function delete()
    {

        if (isset($_GET['id'])) {

            $idd = $_GET['id'];

            $sqldelete = "DELETE FROM `tasks` WHERE `id`= $idd ";
            if ($this->conn->query($sqldelete) === TRUE) {
                $this->msgtype = "alert-danger";
                $this->msg = "Task deleted..";
            } else {
                echo "Error:" . $sqldelete . "<br>" . $this->conn->error;
            }
        }
    }

    function getDataToUpdate()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM  `tasks` WHERE `id`=$id";
            $result = mysqli_query($this->conn, $sql);
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                return $data;
            }
        }
    }

    function update()
    {

        // get data from input field to update
        $id = $_GET['id'];
        $newname = $_POST['name'];
        $newfrom = $_POST['from'];
        $newto = $_POST['to'];
        $newtaskname = $_POST['taskname'];

        $val = $this->validateinputs($newname, $newfrom, $newto, $newtaskname);
        if (!$val) {
            return 0;
        }

        // write query
        $SQL = "UPDATE  `tasks` 
                    SET
                    `name`='$newname',`from`='$newfrom',
                    `to`='$newto',`taskname`='$newtaskname' 
                    WHERE  `id`='$id'";

        // excute query
        $resultupdate = $this->conn->query($SQL);

        // check if excuting or there are error
        if ($resultupdate == TRUE) {
            $this->msgtype = "alert-success";
            $this->msg = "Record updated successfully.";

            header("location:dashboard.php");
        } else {
            echo "Error:" . $resultupdate . "<br>" . $this->conn->error;
        }
    }

    private function validateinputs($newname, $newfrom, $newto, $newtaskname)
    {
        if (
            empty($newname) || empty($newfrom) ||
            empty($newto) || empty($newtaskname) ||
            trim($newname) === '' ||
            trim($newfrom) === '' ||
            trim($newto) === ''   ||
            trim($newtaskname) === ''
        ) {
            $this->msgtype = "alert-danger";
            $this->msg = "Please fill all fields";
            return FALSE;
        }
        return TRUE;
    }
}
