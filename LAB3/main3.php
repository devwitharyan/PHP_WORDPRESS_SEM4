<!-- WAP to make a simple calc using switch case -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prac3</title>
</head>
<body>
    <form method="post">
        
        <label for="num1">Enter number 1:</label>
        <input type="text" name="num1" required>
        <label for="num2">Enter number 2:</label>
        <input type="text" name="num2" required>
        <label for="opr">Enter operation :</label>
        <input type="text" name="opr" required>
        <input type="submit" name="submit" value="submit">
    </form> 
    <?php
        if(isset($_POST["submit"])){
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $opr = $_POST["opr"];

            switch($opr){
                case 1:
                    $ans = $num1 + $num2;
                    echo "Ans is: $ans";
                    break;
                case 2:
                    $ans = $num1 - $num2;
                    echo "Ans is: $ans";
                    break;
                case 3:
                    $ans = $num1 * $num2;
                    echo "Ans is: $ans";
                    break;
                case 4:
                    $ans = $num1 / $num2;
                    echo "Ans is: $ans";
                    break;
                default:
                    echo "Some error";
            }
        }
    ?>
</body>
</html>