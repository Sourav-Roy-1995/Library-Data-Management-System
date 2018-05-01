<?php 
			
	include 'includes/header.php';
?>


<style rel="stylesheet" type="text/css" href="style.css">
	
		#img_div{
		width: 80%;
		padding: 5px;
		margin: 15px auto;
		border: 1px solid #cbcbcb;
	   }
	   #img_div:after{
		content: "";
		display: block;
		clear: both;
	   }
	   img{
		float: left;
		margin: 5px;
		width: 300px;
		height: 140px;
	   }

 </style>
	

	
	<div class="row">
	    <h5 style="text-align:center;font-family: initial;font-size: 39px;margin-top:50px;margin-bottom: 60px; font-weight: bold">User Comments</h5>
		
	</div>
	
	
  <div class ="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
			        
				<table class="table table-hover">
				  <thead>
					<tr>
					  <th>Serial Number</th>		
					  <th>First Name</th>	
					  <th>Last Name</th>
					  <th>Mobile</th>
					  <th>Country</th>
					  <th>Subject</th>					
					</tr>
				  </thead>
				  <tbody>
				  
					<?php					
					session_start();
								
					require("connection.php");
				
					$result = mysqli_query($conn, "SELECT * FROM comment");
					
					while($row=mysqli_fetch_array($result)){
					  $id=$row['id'];
					  echo "<tr>";
					  echo  "<td>" .  $row['id']. "</td>";
					  echo  "<td>" .  $row['firstname']. "</td>";
					  echo  "<td>" .  $row['lastname']. "</td>";
					  echo  "<td>"  . $row['mobile']. "</td>";
					  echo  "<td>"  . $row['country']. "</td>";
					  echo  "<td>"  . $row['subject']. "</td>";
					  ?>
					  
					  <?php
					  echo "</tr>";
					}
					?>
				  </tbody>
				</table>
				</div>	
			</div>	
		</div>



	
<?php 
	include 'includes/footer.php';
?>