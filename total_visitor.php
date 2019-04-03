<?php 
			
    include 'includes/header.php';
    include 'counter/visitor_count.php';
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
	


<?php                          
require("connection.php");
$visitor_result = mysqli_query($conn,"SELECT * FROM unique_visitors");
$total_num = mysqli_num_rows($visitor_result);
if(mysqli_num_rows($visitor_result) > 0){
?>

<div class="row">
    <h5 style="text-align:center;font-family: initial;font-size: 39px;margin-top:50px;margin-bottom:90px;font-weight: bold">Total Visit <span style="color:red"><?php  echo $total_num; ?> </span>Times</h5>
</div>

  <div class ="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 colsm-12 col-xs-12">
                <table class="table text-left">
                    <thead>
                        <tr>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">IP</th>
                            <th scope="col">City</th>
                            <th scope="col">Region</th>
                            <th scope="col">Country</th>
                        </tr>
                    </thead>
                    <?php 
                    while($row=mysqli_fetch_array($visitor_result)){
                    $id=$row['id'];
                    $date            =      $row['date'] ;
                    $time            =      $row['time'] ;            
                    $ip              =      $row['ip'];         
                    $city            =      $row['city'];  
                    $region          =      $row['region'];       
                    $country         =      $row['country'];  
                    ?>
                    <tbody>
                    <tr id="<?php echo $row['id']; ?>" >
                        <td data-target="date"><?php echo $date;?></td>
                        <td data-target="time"><?php echo $time;?></td>
                        <td data-target="ip" ><?php echo $ip;?></td>
                        <td data-target="city" ><?php echo $city;?></td>
                        <td data-target="region" ><?php echo $region;?></td>
                        <td data-target="country" ><?php echo $country;?></td>
                    </tr>
                    <?php
                    }
                      
                    }
                        
                    else {
                        ?>
                            <h2>No views till now...<i class="fas fa-long-arrow-alt-right" style="color:#1E1E1E;margin-left:5px;"></i></h2>
                        <?php
                    }


                    ?> 
                    </tbody>
                </table> <!--[/End table]-->        
				
			</div>	
		</div>	
  </div>



	
<?php 
	include 'includes/footer.php';
?>	