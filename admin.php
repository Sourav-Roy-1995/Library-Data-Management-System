<?php

	include 'includes/header.php';
	include 'counter/visitor_count.php';
?>

<head>

	<link href="css/login.css" rel="stylesheet">

</head>

<form class="login-form" action="admin_login.php" method="POST">

  <div class="container login-container">
    <label><b>Email</b></label>
    <input class="login-input" type="text" placeholder="Enter Email" name="email" required>

    <label><b>Password</b></label>
    <input class="login-input" type="password" placeholder="Enter Password" name="password" required>

    <button class="login-btn" type="submit" name="login" value="Login">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

</form>





<?php	
	include 'includes/footer.php';
?>