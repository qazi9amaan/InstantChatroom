<?php
  // define('DB_SERVER', 'localhost');
  // define('DB_USERNAME', 'root');
  // define('DB_PASSWORD', '');
 //  define('DB_DATABASE', 'mychat');

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "mychat";


   $con = mysqli_connect($servername,$username,$password,$db);
	if (!$con) 
	{
    	die("Connection failed: " . mysqli_connect_error());
	}
	


?>
