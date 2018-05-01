<?php 
	
	session_start();
								
	require("connection.php");

	// Check connection
	if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		
		if(isset($_POST['login'])){
								  
		$email = $_POST['email'];
		$pwd = $_POST['password'];									
		$sql="SELECT * FROM admin WHERE email='$email' AND password='$pwd' ";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
										
				if ($result=mysqli_query($conn,$sql))
				// Fetch one and one row
				while ($row=mysqli_fetch_row($result)){
												
										header("Location: admin_panel.php");
										
										}
									
									}
										
									else {
										 mysqli_error($conn);
										 header("Location: login_error.php");
									}
									
		}
		
		mysqli_close($conn);
		
?>