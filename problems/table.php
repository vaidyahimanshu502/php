<?php
   function printTable($num) {
      for($i = 1; $i <= 10; $i++) {
         echo $num . ' ' . '*' . ' ' . $i . ' ' . '=' . ' '. $num * $i . '<br>';
      }
   }
   $num = 10;
   printTable($num);
?>