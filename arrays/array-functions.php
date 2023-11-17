<!-- 1. array() : PHP array() function creates and returns an array.
     It allows you to create indexed, associative and multidimensional arrays. -->

<!-- 2. array_change_key_case() : PHP array_change_key_case() function 
        changes the case of all key of an array. -->

        <?php
           $salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
           print_r(array_change_key_case($salary,CASE_UPPER));  
           print_r(array_change_key_case($salary,CASE_LOWER));   
         ?>

<!-- 3. array_chunk() : PHP array_chunk() function splits array into chunks.
     By using array_chunk() method, you can divide array into many parts. -->

        <?php
           $arr = [1,2,3,4,5,6,7,8,9];
           print_r(array_chunk($arr,3));
         ?>

<!-- 4. count() : PHP count() function counts all elements in an array.  -->

<!-- 5. sort() : PHP sort() function sorts all the elements in an array. -->

        <?php
           $sesions = ["summer","winter","spring","autumn"];
           sort($sesions);
           foreach($sesions as $sesion) {
             echo $sesion . " " . '<br>';
           }
           $nums = [3,4,8,2,4,5,7,9];
           sort($nums);
           foreach($nums as $num) {
              echo $num . " " . "<br>";
           }
         ?>

<!-- 6. array_reverse() : PHP array_reverse() function returns an array
      containing elements in reversed order. -->

      <?php
         $nums = [1,2,3,4,5,6];
         $nums = array_reverse($nums);
         foreach($nums as $num) {
            echo $num . " " . "<br>";
         }
       ?>


<!-- 7. array_search() : PHP array_search() function searches the specified
      value in an array. It returns key if search is successful. -->

      <?php
         $nums = [1,2,3,4,5,6];
         $key = array_search(6, $nums);
         echo "Searched element at : " . " " . $key;
       ?>