<!-- PHP data types are used to hold different types of data or values. PHP supports 8 primitive data types that can be categorized further in 3 types:

 1. Scalar Types (predefined)
 2. Compound Types (user-defined)
 3. Special Types -->

 <!-- scalar data types  -->
    <!-- 1. boolean
         2. integer
         3. fload
         4. string -->

<!-- compound data types -->
    <!-- 1. array
         2. objects -->

<!-- special data types -->
    <!-- 1. resource
         2. NULL -->

 <!-- examples -->
<?php
   //boolean
   if(true) echo "Hello himanshu!" . '<br>';
   else echo "Connection error!";

   // integers
   $num = 100;
   echo $num. '<br>';

   // float
   $float = 64.64;
   echo $float . '<br>';

   // Strings
   $name = "Radha Rani";
   echo $name . '<br>';

   // Arrays
   $arr = array("Yamaha", "Royal Enfield", "Guana");
   echo "1st element is : ". $arr[0] . '<br>';
   echo "2nd element is : ". $arr[1] . '<br>';
   echo "3rd element is : ". $arr[2] . '<br>';

   // Objects
   class Bike {
    function modelName() {
        $model_name = "Royal Enfield";
        echo $model_name . '<br>';
    }
   }
   $obj = new Bike;
   $obj->modelName();

   // NULL
   $nt = NULL;
   echo $nt . '<br>';

?>