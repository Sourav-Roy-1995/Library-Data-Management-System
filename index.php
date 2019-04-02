<?php

    date_default_timezone_set('Asia/Dhaka');
	require( 'connection.php');
	include 'includes/header.php';
	include 'includes/top_menu.php';
	
?>


<?php	
	include 'includes/body.php';
	include 'includes/footer.php';
?>


<?php

//Counting visitor to the website

    $date   = date("Y-m-d");  //return current date
	$userIP = $_SERVER['REMOTE_ADDR']; //store remote user id address

	$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$userIP"));

	$city = $geo["geoplugin_city"];
	$region = $geo["geoplugin_regionName"];
	$country = $geo["geoplugin_countryName"];

	
	$visit_time = date("h:i:s"); //Visit Time


	$insertQuery = "INSERT INTO unique_visitors(date,time,ip,city,region,country) VALUES ('$date','$visit_time','$userIP','$city','$region','$country')";
	mysqli_query($conn,$insertQuery);
	
// $myIp = getHostByName(getHostName());
// echo $myIp;

?>