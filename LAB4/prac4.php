<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>odd even with array</h1>";
        echo "<ul>";
        $arr = array(1,2,3,4,5);
        foreach($arr as $value){
            if($value % 2 ==0){
                echo "<li>$value is even</li>";
            }
            else{
                echo "<li>$value is odd</li>";
            }
        }
        echo "</ul>";
    ?>

    
</body>
</html>