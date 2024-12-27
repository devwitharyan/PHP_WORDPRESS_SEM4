<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Associative array</h1>";
        echo "<ul>";
        $arr = array(
                "name" => "nigesh",
                "roll" => "22020"
            );
        foreach($arr as $key => $value ){
            echo "<li>$key = $value</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>