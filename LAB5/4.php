<!-- WAP to print fibonacci using udf -->

<?php
    function fibo($n){
        $a = 0;
        $b = 1;

        for ($i = 0; $i < $n; $i++){
            echo $a. " ";
            $temp = $a + $b;
            $a = $b;
            $b = $temp;
        }
    }
    
   fibo(10);
?>