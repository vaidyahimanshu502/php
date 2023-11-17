<?php
  function sum($x, $y) {
    return $x + $y;
  }
  function diff($x, $y) {
    return $x - $y;
  }

  if(isset($_POST['add'])) {
    $result = sum($_POST['first'], $_POST['second']);
    echo "Sum is: " . $result;
  }
  if(isset($_POST['sub'])) {
    $result = diff($_POST['first'], $_POST['second']);
    echo "Difference is: " . $result;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sum | diff</title>
</head>
<body>
    
<form action="" method="POST">
   <input type="number" name="first" placeholder="Enter first number..."> <br>
   <input type="number" name="second" placeholder="Enter second number..."> <br>
   <input type="submit" name="add" value="sum">
   <input type="submit" name="sub" value="diff">
</form>

</body>
</html>