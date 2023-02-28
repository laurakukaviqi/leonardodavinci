<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname ="institutileonardodavinci";
   $conn=mysqli_connect($servername,$username,$password,"$dbname");
   if($conn->connect_error){
      die('Could not Connect My Sql:' .mysql_error());
   }
?>