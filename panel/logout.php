<?php 

session_start();
session_destroy();

echo'<script>window.location="../login.php";</script>'; // klikom na odjavite se na korisnickom panelu unistava sesiju i vraca nas na login

?>