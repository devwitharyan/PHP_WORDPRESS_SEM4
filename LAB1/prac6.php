<!-- 6)WAP to print class of result based on percentage : (<40 fail, 40 - 50: PASS, 50 - 60: second, 60 - 70: first, 70< : distinction ) -->

<?php
    $perc = 67;

    if($perc < 40){
        echo "Fail";
    }
    else if($perc>40 && $perc <=50){
        echo "Pass";
    }
    else if($perc>50 && $perc <=60){
        echo "Second";
    }
    else if($perc>60 && $perc <=70){
        echo "First";
    }
    else if($perc>70 && $perc<=100){
        echo "Distinction";
    }
    else{
        echo "enter valid perc";
    }

?>