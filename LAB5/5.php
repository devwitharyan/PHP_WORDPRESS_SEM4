<!-- WAP to find largest number out of 3 value -->

<?php
    function large3($a, $b, $c){
        if($a > $b && $a > $c){
            echo $a." is large";
        }
        else if($b > $a && $b > $c){
            echo $b." is large";
        }
        else{
            echo $c." is large";
        }
    }
    
   large3(10,50,99);
?>