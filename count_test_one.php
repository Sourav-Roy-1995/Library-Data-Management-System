<?php

//Counting visitor to the website


    $date   = date("Y-m-d");  //return current date
	$userIP = $_SERVER['REMOTE_ADDR']; //store remote user id address
	
	$visit_time = strtotime(date("h:i:s")); //Visit Time

	$query = "SELECT *FROM unique_visitors where date='$date' ";
	$result = mysqli_query($conn,$query);

	if(mysqli_num_rows($result)==0)
	{
		$insertQuery = "INSERT INTO unique_visitors(date,time,ip) VALUES ('$date','$visit_time','$userIP')";
		mysqli_query($conn,$insertQuery);
	}

	
	else
	{
		$row = mysqli_fetch_array($result);

		$timeout_duration = $row['time']+10;

		if(!preg_match('/'.$userIP.'/i',$row['ip']))
		{
			//Will execute when current ip address is not in database
			$prev_view = $row['views'];
			echo $prev_view;

			$second_insertQuery = "INSERT INTO unique_visitors(date,time,ip,views) VALUES ('$date','$visit_time','$userIP','$prev_view+1')";

			mysqli_query($conn,$second_insertQuery);
		}

		if (preg_match('/'.$userIP.'/i',$row['ip']) && ($visit_time > $timeout_duration) )
		{
			//Will execute when current ip address is not in database
			$newIP = "$row[ip] $userIP"; //Combine previous and current ip address with a separator for updating into database
			$updateQuery = "UPDATE unique_visitors SET ip = '$newIP',time = '$visit_time',views = views+1 WHERE date = '$date' ";
			mysqli_query($conn,$updateQuery);

		}
	}


?>