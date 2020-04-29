<?php
   session_start();
   
   if(session_destroy()) {
      header("Location:http://easytomail.in/login.php");
   }
?>