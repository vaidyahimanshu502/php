<!-- PHP session is used to store and pass information from one page to
     another temporarily (until user close the website). -->

<!-- PHP session creates unique user id for each browser to recognize the
     user and avoid conflict between multiple browsers. -->

<!-- session_start() : PHP session_start() function is used to start the 
     session. It starts a new or resumes existing session. It returns existing 
     session if session is created already. If session is not available, it 
     creates and returns new session. -->

     <?php
        session_start();
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session |  Example</title>
</head>
<body>
    <?php
       $_SESSION["user"] = "Himanshu Vaidya";
     ?>
     <a href="./sessions2.php">Go to new page</a>
     <a href="./destroy.php">Destroy the session</a>
</body>
</html>