<?php
include("connection.php");
$deleteid=$_GET['deleteid'];
if(isset($deleteid))
{
	$delquery= "DELETE FROM `comment` WHERE `id`=".$deleteid;
	$result= mysqli_query($conn,$delquery);
	if($result==true)
	{
		?>
		<script>alert("Record Deleted Successfully");
		window.location.href="user_comment.php";</script>
		<?php
	}
}
?>