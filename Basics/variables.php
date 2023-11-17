<?php
 $msg = "Hello Himanshu!";
 $res = "Yes rahul!";

 print "Rahul sid to me '. $msg .' and i replied '. $res .'";

 $fname = "Himanshu";
 $lname = "Vaidya";

 echo "My name is : " .$fname,' ', $lname;
?>

<!-- As PHP is a loosely typed language, so we do not need to declare the data
 types of the variables. It automatically analyzes the values and makes conversions
 to its correct datatype. -->

 <?php
    $name = "Himanshu Vaidya";
    $age = 27.5;
    $salary = 13000;

    echo "$name <br/>";
    echo "$age <br/>";
    echo "$salary <br/>";

    $x = 20;
    $y = 20.4;
    $z = $x + $y;

    echo "$z";

 ?>


<!-- Scopes of variables. -->

<!-- 1. Local Variables :- The variables that are declared within a function are
 called local variables for that function.-->

 <?php
   function local_var() {
    $num = 20;
    echo "$num";   // Accessible here
   }

   local_var();
   //echo "$num";    // Not accessible here
 ?>

<!-- 2. Global variables :-The global variables are the variables that are declared outside
 the function. These variables can be accessed anywhere in the program -->
 <?php
    $var = "Radhe Radhe!";
    function print_var() {
        global $var; // we need to specify it global 
        echo "$var";  // accessible here 
    }
    print_var();
    echo "$var"; // Also accessible here 
 ?>

 <!-- NOTE: There is a $GLOBALS inbuild method used to access global variables inside the other scope -->

 <?php
   $num1 = 20;
   $num2 = 30;

   function find_sum() {
    $sum = $GLOBALS['num1'] + $GLOBALS['num2'];
    echo "$sum";
   }
   find_sum();
 ?>

 <!--  3. STATIC variables :- It is a feature of PHP to delete the variable,
          once it completes its execution and memory is freed. Sometimes we need to store a
          variable even after completion of function execution. Therefore, another 
          important feature of variable scoping is static variable. We use the static keyword
          before the variable to define a variable, and this variable is called as static variable. -->

<?php
function static_var() {
    static $static_var_var = 5;
    $non_static = 8;

    // increment static
    $static_var_var++;
    // Increment non static
    $non_static++;

    echo $static_var_var;
    echo "<br>"; // Add a line break here for clarity
    echo $non_static;
}
static_var();  // 6 9
static_var();  // 7 9

?>
