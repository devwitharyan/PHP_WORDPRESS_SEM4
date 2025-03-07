<?php
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "aryan_119";

    $conn = mysqli_connect($sname, $uname, $pass, $db);

    if(!$conn){
        echo "Connection failed:".mysqli_connect_error();
    }

    $uid = $_GET['did'];
    $qry = "CALL stddetails_delete($uid)";
    $sql = mysqli_query($conn, $qry);
    if($sql){
        echo "Student data deleted Successfully";
        header("location:show.php");
    }
    else{
        echo "ERROR: Record not deleted";
    }
?>