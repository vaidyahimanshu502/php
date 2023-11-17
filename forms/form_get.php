<!-- GET -->

<?php
   $name = $_GET['name'];
   echo "Welcome : " . " " . $name . "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get | PHP</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name= "name">
        <input type="submit" value="getName">
    </form>
</body>
</html>