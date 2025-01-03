<!-- WAP to print your name using udf -->

<?php
    echo "<h1> Without argument and without return</h1>";
    function printwihoutarg(){
        echo "aryan";
    }
    printwihoutarg();

    echo "<h1> Without argument and with return</h1>";
    function printwithreturn(){
        return "aryan2";
    }
    echo printwithreturn();

    echo "<h1> With argument and without return</h1>";
    function printwitharg($s1){
        echo $s1;
    }

    $s1 = "aryan3";
    printwitharg($s1);

    echo "<h1> With argument and with return</h1>";
    function printwithargwithretu($s1){
        return "aryan4";
    }

    echo printwithargwithretu($s1);
?>