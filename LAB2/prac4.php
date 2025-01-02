<!-- 4) WAP to find the greatest from 3 numbers -->

<?php
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;

    if($num1 == $num2 && $num1 == $num3){
        echo "All numbers are same";
    }
    else if($num1 == $num2){
        echo "$num1 one and $num2 two are same";
    }
    else if($num2 == $num3){
        echo "$num2 two and $num3 three are same";
    }
    else if($num1 == $num3){
        echo "$num1 one and $num3 three are same";
    }
    else{
        if($num1 > $num2 && $num1 > $num3){
            echo ($num1. " is greater");
        }
        else if($num2 > $num3){
            echo ($num2. " is greater");
        }
        else{
            echo ($num3. " is greater");
        }
    }
?>
