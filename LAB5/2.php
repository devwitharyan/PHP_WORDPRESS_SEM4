<!-- WAP to create calc using all type of udf -->

<?php
    echo "<h1>CALC</h1>";
    echo "<h1> Without argument and without return</h1>";
    function calcwithoutargwithoutret(){
        $a = 10;
        $b = 20;
        echo "add:". $a+$b;
        echo " sub:". $a-$b;
        echo " mul:". $a*$b;
        echo " div:". $a/$b;

    }
    calcwithoutargwithoutret();

    echo "<h1> Without argument and with return</h1>";
    function calcwithoutargwithret(){
        $a = 30;
        $b = 20;
        return [
            "add" => $a + $b,
            "sub" => $a - $b,
            "mul" => $a * $b,
            "div" => $a / $b
        ];
    }
    
    $result = calcwithoutargwithret();
    echo "Add: " . $result['add'] . "<br>";
    echo "Sub: " . $result['sub'] . "<br>";
    echo "Mul: " . $result['mul'] . "<br>";
    echo "Div: " . $result['div'] . "<br>";

    echo "<h1> With argument and without return</h1>";
    function calcwithargwithoutret($a, $b){
        echo "add:". $a+$b;
        echo " sub:". $a-$b;
        echo " mul:". $a*$b;
        echo " div:". $a/$b;
    }
    
    calcwithargwithoutret(10,20);

    echo "<h1> With argument and with return</h1>";
    function calcwithargwithret($a,$b){
        return [
            "add" => $a + $b,
            "sub" => $a - $b,
            "mul" => $a * $b,
            "div" => $a / $b
        ];
    }
    
    $result = calcwithargwithret(10,50);
    echo "Add: " . $result['add'] . "<br>";
    echo "Sub: " . $result['sub'] . "<br>";
    echo "Mul: " . $result['mul'] . "<br>";
    echo "Div: " . $result['div'] . "<br>";
?>