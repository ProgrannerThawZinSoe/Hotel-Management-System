<?php
   $connection = mysqli_connect("localhost","root","","hotel_db");
   if(!$connection){
       echo "<p style='color:red'> Database Connection Fail </p>";
   }
?>