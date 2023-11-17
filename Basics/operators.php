<!-- PHP Operator is a symbol i.e used to perform operations on operands. -->
<!-- 1. Arithmetic Operators
     2. Assignment Operators
     3. Bitwise Operators
     4. Comparison Operators
     5. Incrementing/Decrementing Operators
     6. Logical Operators
     7. String Operators
     8. Array Operators
     9. Type Operators
     10. Execution Operators
     11. Error Control Operators -->

<?php
// Arithmetic Operators
  $num1 = 10;
  $num2 = 2;

  $sum = $num1 + $num2;
  echo $sum . '<br>';

  $diff = $num1 - $num2;
  echo $diff . '<br>';

  $mul = $num1 * $num2;
  echo $mul . '<br>';

  $div = $num1 / $num2;
  echo $div . '<br>';

  $mod = $num1 % $num2;
  echo $mod . '<br>';

  $exponet = $num1 ** $num2;
  echo $exponet . '<br>';

  //Assignment Operators
            // =
            // +=
            // -=
            // *=
            // /=
            // %=
  // Comparison Operators
           // == : equal
           // === : identical
           // !== : Not identical
           // != : Not equal
           // <> : Not equal
           // < : less than
           // > : greater than
           // <= : lessthan equal to
           // >= : Greater than equal to
           // <=> : Spaceship 
                        // return -1 if 1st is less than other
                        // return 0 if equlas
                        // return 1 if 1st is greater than other
    // increment and decrement 
           // ++
           // --

   // String Operators
           // . : concatenation
           // .= concatenation assignment

   // Array operators 
     // 1. +
     $arr1 = [1,2,3];
     $arr2 = [4,5,6];

     $combinedArr = $arr1 + $arr2;
     for($i = 0; $i < count($combinedArr); $i++) {
        echo $combinedArr[$i] . " ";
     }

?>

<!-- // or # : Single line comment, /** Multi line comment */ -->