<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show | Session</title>
</head>
<body>
    <?php
      if(!isset($_SESSION['user'])) {
        echo "Session not found!";
      } else {
        echo "Hey user your session is : " . " " . $_SESSION['user'];
      }
    ?>
</body>
</html>