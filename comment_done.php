<?php 
	
		session_start();
								
		$con = mysqli_connect("localhost","root","","lict_project");

		// Check connection
		if (mysqli_connect_errno())
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
								  
								
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$mobile = $_POST['mobile'];
				$country = $_POST['country'];
				$subject = $_POST['subject'];
				
				$sql = "INSERT INTO comment". "(firstname,lastname,mobile,country,subject) ". 
				"VALUES('$firstname','$lastname','$mobile','$country','$subject')";
				
				mysqli_select_db($con,'lict_project');
				$retval = mysqli_query($con,$sql);
				if($retval){
					
							 // echo "<script type='text/javascript'>alert('Done!')</script>";
							 // header("Location: comment.php"); 

							 ?>
								<script>alert("Record Deleted Successfully");
								window.location.href="comment.php";</script>
								<?php
													 
						   }
								
				if(! $retval ){
								 die('Could not enter data: ' . mysqli_error($con));
							}
											
									
				mysqli_close($con);
														
?>
