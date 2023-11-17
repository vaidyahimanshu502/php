<?php
   session_start();
   
   if(session_destroy()) {
      header("location: ./sessions.php");
      exit;
   }
?>