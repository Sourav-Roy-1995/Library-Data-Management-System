<?php
include("connection.php");
$deleteid=$_GET['deleteid'];
if(isset($deleteid))
{
	$delquery= "DELETE FROM `books` WHERE `id`=".$deleteid;
	$result= mysqli_query($conn,$delquery);
	if($result==true)
	{
		?>
		<script>alert("Record Deleted Successfully");
		window.location.href="admin_book_list.php";</script>
		<?php
	}
}
?>