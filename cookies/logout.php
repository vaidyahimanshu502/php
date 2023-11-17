<?php
  if(setcookie("user", "", time()-3600)) {
    header("location: ./cookies.php");
    exit;
  }
?>