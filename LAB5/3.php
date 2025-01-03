<!-- wap to find simple interest using udf -->

<?php
    function si($p,$r,$n){
        return ($p * $r * $n)/100;
    }
    
   echo si(10,50, 10);
?>