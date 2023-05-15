<?php 

  $MYSQL_HOST = "localhost"; 
  $MYSQL_USER = "root";
  $MYSQL_PW = "";
  $MYSQL_DB = "racunari";
   
  $db = mysqli_connect($MYSQL_HOST, $MYSQL_USER, $MYSQL_PW, $MYSQL_DB);
  if ($db->connect_error) {
    die("Konekcija nije uspjela: " . $db->connect_error);
    echo'<script>window.location="../../../ERRORI/500.html"; </script> ';
  }
 ?>