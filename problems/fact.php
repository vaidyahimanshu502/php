<?php
   function findFact($num) {
     if($num == 0 || $num == 1) {
        return 1;
     }
     $fact = $num * findFact($num - 1);
     return $fact;
   }
   $num = 6;
   $fact = findFact($num);
   echo $fact;
?>