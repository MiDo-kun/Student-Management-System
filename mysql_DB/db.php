<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbase = "sms_db";

   $conn = mysqli_connect($servername, $username, $password, $dbase);
   
   if(!$conn) {
      echo "Error!";
   }
   else {
      // echo "Working you can code now!";
   }
?>