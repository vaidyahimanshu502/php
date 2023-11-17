<!-- Write a PHP program to print sum of digits. -->

<?php
   $num = 1234;
   $sum = 0;

   while ($num != 0) {
       $digit = $num % 10;
       $sum += $digit;
       $num = $num / 10;
   }

   echo $sum;
?>
