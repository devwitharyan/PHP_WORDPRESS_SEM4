<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student-Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .form-container {
            width: 300px;
            margin: 50px auto;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .form-group label {
            width: 100px;
            font-weight: bold;
        }
        .form-group input {
            flex: 1;
            padding: 5px;
        }
        input[type="submit"] {
            margin-left: 100px;
            padding: 5px 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <form action="insert.php" method="post">
            <div class="form-group">
                <label>Student Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Roll No:</label>
                <input type="text" name="rno" required>
            </div>
            <div class="form-group">
                <label>Class:</label>
                <input type="text" name="class" required>
            </div>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>
</html>
