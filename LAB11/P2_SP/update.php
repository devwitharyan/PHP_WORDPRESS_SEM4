<?php
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "aryan_119";

    $conn = mysqli_connect($sname, $uname, $pass, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $uid = "";
    $name = "";
    $rno = "";
    $class = "";

    if (isset($_GET['uid'])) {
        $uid = mysqli_real_escape_string($conn, $_GET['uid']);
        
        $qry = "SELECT * FROM stddetails WHERE sid='$uid'";
        $result = mysqli_query($conn, $qry);
        
        if ($row = mysqli_fetch_assoc($result)) {
            $name = $row['stdname'];
            $rno = $row['rno'];
            $class = $row['class'];
        } else {
            echo "Error: Student record not found!";
            exit;
        }
    }

    if (isset($_POST['submit'])) {
        $uid = mysqli_real_escape_string($conn, $_POST['uid']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $rno = mysqli_real_escape_string($conn, $_POST['rno']);
        $class = mysqli_real_escape_string($conn, $_POST['class']);

        $qry = "CALL stddetails_update('$uid', '$name', '$rno', '$class')";
        $sql = mysqli_query($conn, $qry);

        if ($sql) {
            echo "Student data updated successfully!";
            header("Location: show.php");
            exit;
        } else {
            echo "ERROR: Record not updated!";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
</head>
<body>
    <h2>Update Student Details</h2>
    <form method="post">
        <label>UID:</label>
        <input type="text" name="uid" value="<?php echo htmlspecialchars($uid); ?>" readonly><br><br>

        <label>Student Name:</label>
        <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required><br><br>

        <label>Roll No:</label>
        <input type="text" name="rno" value="<?php echo htmlspecialchars($rno); ?>" required><br><br>

        <label>Class:</label>
        <input type="text" name="class" value="<?php echo htmlspecialchars($class); ?>" required><br><br>

        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
