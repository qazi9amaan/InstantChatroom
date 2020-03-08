<?php   

session_destroy(); //destroy the session
header("location:../index.php"); //to redirect back to "http://localhost/Shop" after logging out
exit();
?>