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

            $query = "CALL stddetails_select()";
            $result = mysqli_query($conn, $query);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $sid = htmlspecialchars($row['sid']);
                    $name = htmlspecialchars($row['stdname']);
                    $rno = htmlspecialchars($row['rno']);
                    $class = htmlspecialchars($row['class']);
        ?>
                <tr>
                    <td><?php echo $sid; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $rno; ?></td>
                    <td><?php echo $class; ?></td>
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
            }
            mysqli_close($conn);
        ?>
    </table>
    <a href="form.php">
        <button>Add New Record</button>
    </a>
    <a href="resetinc.php">
        <button>Reset Auto Increment</button>
    </a>
</body>
</html>
