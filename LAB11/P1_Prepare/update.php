<?php
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "aryan_119";

    $conn = mysqli_connect($sname, $uname, $pass, $db);

    if(!$conn){
        echo "Connection failed:".mysqli_connect_error();
    }

    $uid = $_GET['uid'];
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $rno = $_POST['rno'];
        $class = $_POST['class'];
        $qry = "UPDATE stddetails SET stdname=?, rno=?, class=? WHERE sid=?";
        $stmt = mysqli_prepare($conn, $qry);
        mysqli_stmt_bind_param($stmt, "sisi", $name, $rno, $class, $uid);
        if(mysqli_stmt_execute($stmt)){
            echo "Student data updated Successfully";
            header("location:show.php");
        }
        else{
            echo "ERROR: Record not updated";
        }
    }
?>

<html>
    <body>
        <?php
            $qry = "SELECT stdname, rno, class from stddetails WHERE sid=?";
            $stmt = mysqli_prepare($conn, $qry);
            mysqli_stmt_bind_param($stmt, "i", $uid);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $name, $rno, $class);
            mysqli_stmt_fetch($stmt);
        ?>
        <form method="post">;
            <label>Studnet Name:</label>
            <input type="text" name="name" value="<?php echo $name; ?>" required><br><br>
            <label>Roll No:</label>
            <input type="text" name="rno" value="<?php echo $rno; ?>" required><br><br>
            <label>Class:</label>
            <input type="text" name="class" value="<?php echo $class; ?>" required><br><br>
            <input type="submit" name="submit">
            
        </form>
    </body>
</html>