<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Student Details</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Roll No</th>
            <th>Class</th>
            <th>Action</th>
        </tr>
        <?php
            $sname = "localhost";
            $uname = "root";
            $pass = "";
            $db = "aryan_119";
        
            $conn = mysqli_connect($sname, $uname, $pass, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            $query = "SELECT * FROM stddetails";
            $stmt = mysqli_prepare($conn, $query);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $sid, $name, $rno, $class);
            
            while (mysqli_stmt_fetch($stmt)) {
        ?>
                <tr>
                    <td><?php echo htmlspecialchars($sid); ?></td>
                    <td><?php echo htmlspecialchars($name); ?></td>
                    <td><?php echo htmlspecialchars($rno); ?></td>
                    <td><?php echo htmlspecialchars($class); ?></td>
                    <td>
                        <a href="delete.php?did=<?php echo $sid; ?>">
                            <button>Delete</button>
                        </a>
                        <a href="update.php?uid=<?php echo $sid; ?>">
                            <button>Update</button>
                        </a>
                    </td>
                </tr>
        <?php 
            } 
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        ?>
    </table>
    <a href="form.php">
        <button>Add New Record</button>
    </a>
</body>
</html>
