<?php
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "aryan_119";

    $conn = mysqli_connect($sname, $uname, $pass, $db);

    if(!$conn){
        echo "Connection failed:".mysqli_connect_error();
    }

    $name = $_POST['name'];
    $rno = $_POST['rno'];
    $class = $_POST['class'];

    $sql = "CALL stddetails_insert('$name', '$rno', '$class')";
    $qry = mysqli_query($conn, $sql);
    if($qry){
        echo "Student data inserted Successfully";
        header("location:show.php");
    }
    else{
        echo "Error";
    }

?>