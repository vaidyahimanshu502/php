<!-- There are 3 types of array in PHP.

1. Indexed Array
2. Associative Array
3. Multidimensional Array -->

<?php
   //Indexed array
   $seasions = array("summer","winter","spring","autumn");
   echo "Seasons are : " . ' ' . $seasions[0]  . ' ' . $seasions[1]  . ' ' . $seasions[2]  . ' ' . $seasions[3] ."<br>";
   //Traversal
   foreach ($seasions as $key => $seasion) {
    # code...
    echo $seasion . ' '  . '<br>';
   }

   for($i = 0; $i < count($seasions); $i++) {
      echo $seasions[$i] . " " . '<br>';
   }
   
   //Associative Array
   $salary = array("Himu"=>20000, "Ram"=>12000, "Mohan"=>30000);
   echo "Salarys are : ". " " . $salary["Himu"] . " " . $salary["Ram"] . " " . $salary["Mohan"] ."<br>";

   //Traversal
   foreach($salary as $key=>$value) {
    echo "Key is : ". " " . $key . " " . "Vakue is : " . $value . "<br>";
   }

   //Multi Dimensional array
   $numbers = [[1,2,3,4], [1,2,3,4] ,[1,2,3,4]];

   //traversal
   for($i = 0; $i < count($numbers); $i++) {
      for($j = 0; $j < count($numbers[0]); $j++) {
         echo $numbers[$i][$j] . " ";
      }
      echo "<br>";
   }


?>