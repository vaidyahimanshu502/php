<?php
  $name = $_POST["name"];
  $password = $_POST["password"];

  echo "Hello : " . " ". $name . " Your password is : " . " " . $password;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post | Example</title>
</head>
<body>
<form action="" method="post">   
<table>   
<tr><td>Name:</td><td> <input type="text" name="name"/></td></tr>  
<tr><td>Password:</td><td> <input type="password" name="password"/></td></tr>   
<tr><td colspan="2"><input type="submit" value="login"/>  </td></tr>  
</table>  
</form>
</body>
</html>