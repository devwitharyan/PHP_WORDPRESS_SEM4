<!-- WAP to calculate bill using control structure. 
for first 50 units - Rs. 3.50/unit, 
for next 100 units - Rs. 4.00/unit, 
for next 100 units - Rs. 5.20/unit, 
for next 200 units - Rs. 6.50/unit. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>
<body>
    <form method="post">
        <label for="unit">Enter Unit:</label>
        <input type="text" name="unit" required>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST["submit"])){
            $units = $_POST["unit"];
            $bill = 0;

            if($units <= 50){
                $bill = $units * 3.50;
            }
            else if($units <= 100){
                $bill = (50 * 3.50) + (($units - 50) * 4.00);
            }
            else if($units <= 200){
                $bill = (50 * 3.50) + (100 * 4.00) + (($units - 100) * 5.20);
            }
            else {
                $bill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 200) * 6.50);
            }

            echo "<p>Total Bill: Rs. " . number_format($bill, 2) . "</p>";
        }
    ?>
</body>
</html>
