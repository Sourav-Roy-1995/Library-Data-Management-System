<?php

//Counting visitor to the website

    $date   = date("Y-m-d");  //return current date
	$userIP = $_SERVER['REMOTE_ADDR']; //store remote user id address

	$geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$userIP"));

	$city = $geo["geoplugin_city"];
	$region = $geo["geoplugin_regionName"];
	$country = $geo["geoplugin_countryName"];

	
	$visit_time = strtotime(date("h:i:s")); //Visit Time

	$query = "SELECT *FROM unique_visitors where date='$date' ";
	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)==0)
	{
		$insertQuery = "INSERT INTO unique_visitors(date,time,ip,city,region,country) VALUES ('$date','$visit_time','$userIP','$city','$region','$country')";
		mysqli_query($conn,$insertQuery);
	}

	
	else
	{
		$row = mysqli_fetch_array($result);

		if (!preg_match('/'.$userIP.'/i',$row['ip']))
		{
			//Will execute when current ip address is not in database
			$newIP = "$row[ip],$userIP"; //Combine previous and current ip address with a separator for updating into database

			$newCity    = "$row[city],$city";
			$newReg     = "$row[region],$region";
			$newCountry = "$row[country],$country";

			$updateQuery = "UPDATE unique_visitors SET time = '$visit_time',ip = '$newIP',city = 
			'$newCity',region = '$newReg',country = '$newCountry', views = views+1 WHERE date = '$date' ";
			mysqli_query($conn,$updateQuery);
			
		}
	}

// $myIp = getHostByName(getHostName());
// echo $myIp;

?>