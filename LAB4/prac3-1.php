<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>3D Associative array</h1>";
        echo "<ul>";
        $arr = array(
                array(
                    "name" => "nigesh",
                    "roll" => "12020"
                ),
                array(
                    "name2" => "nigesh2",
                    "roll2" => "22020"
                ),
                array(
                    "name3" => "nigesh3",
                    "roll3" => "32020"
                )
            );
        foreach($arr as $key => $value ){
            foreach($value as $key1 => $value1 ){
                echo "<li>$key1 => $value1</li>";
            }
        }
        echo "</ul>";
    ?>
</body>
</html>