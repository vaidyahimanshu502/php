<!-- setcookie() : PHP setcookie() function is used to set cookie with HTTP response.
     Once cookie is set, you can access it by $_COOKIE superglobal variable. -->

     <?php
         setcookie("user", "Himanshu Vaidya");
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie | example</title>
</head>
<body>
    <?php
       if(!isset($_COOKIE['user'])) {
         echo "User not found!";
       } else {
         echo "Hello user your cookie is : " . " " . $_COOKIE['user'];
       }
     ?>
     <a href="./logout.php">Logout</a>
</body>
</html>