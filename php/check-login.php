<?php
	include("config.php");
	session_start();

	if(($_SERVER["REQUEST_METHOD"] == "POST"))
	{	
		$uName = $_POST['username'];
		$pWord = $_POST['password'];

		$sql = "SELECT * FROM user WHERE regusername='".$uName."' and regpassword='".$pWord."'";

		$result = mysqli_query($con, $sql);
		if (mysqli_num_rows($result) ==1 ) 
		{
	 	   while($row = mysqli_fetch_assoc($result))
	 	   {
	 	       $_SESSION['uname']=$uName;
				header('location:chat.php');
	  	  }
		} else {
		    echo "Error: ".mysqli_error($con);
		}
	}
	

	mysqli_close($con);

	?>