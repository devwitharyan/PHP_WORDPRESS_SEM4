<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num1 = 10;
    $num2 = 20;
    $sum1 = sum($num1, $num2);

    echo "$sum1";
    function sum($num1, $num2)
    {
        
        $ans = $num1+$num2;
        return $ans;
    }
    ?>
</body>
</html>