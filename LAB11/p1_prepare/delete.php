<?php
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "aryan_119";

    $conn = mysqli_connect($sname, $uname, $pass, $db);

    if(!$conn){
        echo "Connection failed:".mysqli_connect_error();
    }

    $did = $_GET['did'];
    $qry = "DELETE FROM stddetails WHERE sid=?";
    $stmt = mysqli_prepare($conn, $qry);
    mysqli_stmt_bind_param($stmt, "i", $did);
    if(mysqli_stmt_execute($stmt)){
        echo "Student data deleted Successfully";
        header("location:show.php");
    }
    else{
        echo "ERROR: Record not deleted";
    }
?>