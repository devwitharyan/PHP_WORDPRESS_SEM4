<?php
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "aryan_119";

    $conn = mysqli_connect($sname, $uname, $pass, $db);

    if(!$conn){
        echo "Connection failed:".mysqli_connect_error();
    }

    $qry = "ALTER TABLE stddetails AUTO_INCREMENT = 1";
    $sql = mysqli_query($conn, $qry);

    if($sql){
        echo "Auto Increment reset Successfully";
        header("location:show.php");
    }
    else{
        echo "ERROR: Auto Increment not reset";
    }
?>