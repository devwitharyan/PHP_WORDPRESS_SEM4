<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>For loop</h1>";
        echo "<ul>";
        $arr = array(10,20,30,40,50);

        for($i=0;$i<=count($arr);$i++){
            echo "<li>$arr[$i]</li>";
        }
        echo "</ul>";
        

        echo "<h1>For-Each loop</h1>";
        echo "<ul>";
        $arr = array(10,20,30,40,50);
        foreach($arr as $value){
            echo "<li>$value</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>