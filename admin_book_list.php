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
		width: 200px;
		height: 140px;
	   }

 </style>
	

	
	<div class="row">
	    <h5 style="text-align:center;font-family: initial;font-size: 39px;margin-top:50px; font-weight: bold">Book List For Admin</h5>
		<div class="col-md-4 col-md-offset-8">
			<a href="logout.php" class="btn btn-info logout-btn" >logout</a>
		</div>
	</div>
	
	
  <div class ="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
			        
				<table class="table table-hover">
				  <thead>
					<tr>
					  <th>Serial Number</th>	
					  <th>Book Name</th>
					  <th>Writer</th>
					  <th>Description</th>
					  <th>Date</th>
					  <th>Time</th>
					  <th>Image</th>					
					</tr>
				  </thead>
				  <tbody>
				  
					<?php					
					session_start();
								
					require("connection.php");
				
					$result = mysqli_query($conn, "SELECT * FROM books ORDER BY date,time ASC LIMIT 0,30");
				

					while($row=mysqli_fetch_array($result)){
					  $id=$row['id'];
					  echo "<tr>";
					  echo  "<td>" .  $row['id']. "</td>";
					  echo  "<td>" .  $row['book_name']. "</td>";
					  echo  "<td>" .  $row['writer']. "</td>";
					  echo  "<td>"  . $row['description']. "</td>";
					  echo  "<td>"  . $row['date']. "</td>";
					  echo  "<td>"  . $row['time']. "</td>";
					  echo  "<td>"  .  "<img  src='files/".$row['file']."' >". "</td>";
					  echo  "<td> <a class='btn btn-success' href ='files/".$row['file']."' download> Download </a> </td>";
					  ?>
					  
					  <td><a href="delete.php?deleteid=<?php echo $id;?>" class='btn btn-danger'>Delete</a></td>
					  <td><a href="update_success.php?updateid=<?php echo $id;?>" class='btn btn-success'>Update</a></td>
					  
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