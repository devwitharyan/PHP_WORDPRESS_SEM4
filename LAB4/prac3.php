<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>3D array</h1>";
        echo "<ul>";
        $arr = array(
                array(10,20,30),
                array(40,50,60),
                array(70,80,90)
            );
        foreach($arr as $inarray ){
            echo "<br>";
            foreach($inarray as $value ){
                echo " $value";

            }
        }
        echo "</ul>";
    ?>
</body>
</html>