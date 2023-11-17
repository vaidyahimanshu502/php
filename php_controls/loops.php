<?php
// for loop
   for($i = 0; $i < 10; $i++) {
      if($i % 2 != 0) {
         echo $i . '<br>';
      }
   }

// nested for loop
   $twoDarray = array(
     array(1,2,3,4),
     array(1,2,3,4),
     array(1,2,3,4)
   );
   for($i = 0; $i < count($twoDarray); $i++) {
      for($j = 0; $j < count($twoDarray[0]); $j++) {
         echo $twoDarray[$i][$j] . ' ';
      }
      echo '<br>';
   }

   // For ech loop
   $days = ['sunday', 'monday','tuesday','wednesday','thrusday', 'friday', 'saturday'];
   foreach ($days as $day) {
    # code...
    echo $day . '<br>';
   }

   $employee = array (  
    "Name" => "Alex",  
    "Email" => "alex_jtp@gmail.com",  
    "Age" => 21,  
    "Gender" => "Male"  
   ); 
   foreach($employee as $key => $element)  {
     echo $key . " : " . $element . "<br>";
   }

   // nested for each
   $arr = [[1,2,3,4], [1,2,3,4], [1,2,3,4], [1,2,3,4]];
   foreach($arr as $e1) {
     foreach($e1 as $e2) {
        echo $e2 . ' ';
     }
     echo '<br>';
   }

   // while loop
   $number = 1;
   while($number <= 10) {
     echo $number . ' ';
     $number++;
   }

   // nested while loop
   $i=1;    
   while($i<=3){    
     $j=1;    
      while($j<=3){    
       echo "$i   $j<br/>";    
       $j++;    
       }    
     $i++;    
   }    

   // Do while loop
   $x = 1;
   do {
    echo "Number is : " . $x . '<br>';
    $x++;
   } while($x < 2);

   
?>