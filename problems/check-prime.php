<?php
  function checkPrime($num) {
    if($num <= 0) {
        return false;
    }
    for($i = 2; $i <= sqrt($num); $i++) {
        if($num % $i == 0) {
            return false;
          }
        }
    return true;
  }

  $num = 29;
  if(checkPrime($num)) {
    echo "Number is prime.";
  } else {
    echo "Number is not prime.";
  }
?>