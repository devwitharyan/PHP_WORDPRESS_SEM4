<!-- WAP to find the diameter from the given cirlce -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="dia">Enter diameter:</label>
        <input type="text" name="diameter" required>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
        if(isset($_POST["submit"])){
            $diameter = $_POST["diameter"];
            $rad = $diameter / 2;
            $area = 3.14 * ($rad * $rad);

            echo $area;
        }
    ?>
</body>
</html>