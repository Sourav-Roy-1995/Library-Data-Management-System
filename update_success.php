<?php
require("connection.php");
include 'includes/header.php';

$updateid=$_GET['updateid'];


if(isset($updateid))
{

	$readdata= "SELECT * FROM `books` WHERE `id`=".$updateid;
	$queries= mysqli_query($conn,$readdata);
	$queriesarray=mysqli_fetch_array($queries);

	$book_name=$queriesarray['book_name'];
	$writer=$queriesarray['writer'];
	$description=$queriesarray['description'];
	$date=$queriesarray['date'];
  $time=$queriesarray['time'];
	
}

if(isset($_POST['updatedata'])) {

  $book_name=$queriesarray['book_name'];
  $writer=$queriesarray['writer'];
  $description=$queriesarray['description'];
  $date=$queriesarray['date'];
  $time=$queriesarray['time'];

	$upquery="UPDATE `books` SET `book_name`='$book_name',`writer`='$writer',`description`='$description',`date`='$date',`time`='$time' WHERE `id`=".$updateid;

	$updated=mysqli_query($conn,$upquery);
	if($updated==true)
	{
		?>
		<script>alert("Record updated Successfully");
		window.location.href="admin_book_list.php";</script>
		<?php
	}
}
?>



<head>
    <link href="css/get.css" rel="stylesheet" >

</head>


<h5 style="text-align:center;font-family: initial;font-size: 39px;font-weight: bold;margin-top: 114px;">Welcome In Admin Panel</h5>
<h6 style="text-align:center;font-family: initial;font-size: 29px;font-weight: bold;">Update Data !</h6>



<form action="#" method="POST" enctype="multipart/form-data">

  <div class="container login-container">
    
        <label><b>Book Name</b></label>
        
        <input class="login-input" type="text" placeholder="Insert Book Name" name="book_name" required>

        <label><b>Writer Name</b></label>

        <input class="login-input" type="text" placeholder="title" name="writer" required>
        
        <label><b>description</b></label>

        <!-- <input class="login-input" type="text" placeholder="details" name="description" required> -->

        <div class="text-area">
              <textarea class="login-input" type="text" placeholder="details" name="description" cols="40" id="text" 
                rows="4" required> </textarea>
        </div>


        <label><b>Date: </b></label>

        <input class="login-input" type="text" name ="date" value="<?php echo  date("Y/m/d") ?> ">  

        <label><b>Time: </b></label>

        <input class="login-input" type="text" name ="time" value="<?php echo  date("h:i:sa") ?> ">                               
        

        <label><b>Insert Image</b></label>

        <!-- <input class="login-input" type="text" placeholder="details" name="image" required> -->
        <input class="login-input" placeholder="image" type="file" name="file">

        <button type="submit" class="btn btn-default" name="updatedata">Submit</button>  
    
  </div>
       
  
</form>

            

<?php 
    include 'includes/footer.php';
    
?> 