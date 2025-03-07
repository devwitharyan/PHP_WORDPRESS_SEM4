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

    $sql = "INSERT INTO stddetails(stdname, rno, class) VALUES (?,?,?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt,"sis", $name, $rno, $class);
    if(mysqli_stmt_execute($stmt)){
        echo "Student data inserted Successfully";
        header("location:show.php");
    }
    else{
        echo "Error";
    }

?>