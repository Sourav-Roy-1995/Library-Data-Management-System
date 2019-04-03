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
						echo "<script>window.open('admin_panel.php','_self')</script>";
					}
				}
					
				else {
						mysqli_error($conn);
						echo "<script>window.open('login_error.php','_self')</script>";
					}					
		}
		
		mysqli_close($conn);
		
?>