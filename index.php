<?php
session_start();
$_SESSION['logged_in'] = false;
include "configFile.php";

?>

<!DOCTYPE html>
<html>

<head>

	<title>Program licence-Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="includes/style.css">
	<script src="includes/jquery-1.11.3.min.js"></script>
	<script src="includes/script.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1"> 
	
	<?php

	if ($_POST) {

				$con = mysqli_connect($servername, $username, $password, $dbname); // Create connection

				if (!$con) // Check connection

				{	

				    die("Connection failed: " . mysqli_connect_error());

				}	

		$Mail = $_POST['Mail'];

		$Pass = $_POST['Password'];	

		$sql = "SELECT * FROM employee_219 WHERE employee_219.Mail='$Mail' AND employee_219.Password='$Pass';";

		$result = mysqli_query($con, $sql);

		$check_user = mysqli_num_rows ($result);

		if (!$check_user){

			echo "<script> 

			alert('the details does not exsist in the system, please make sure they are correct');

			window.location = 'index.php';

			</script>";

			}

		 if ($check_user) {

			$_SESSION['Mail'] = $Mail;
			
			$_SESSION['logged_in'] = true;

			echo "<script>

			window.location = 'home.php';

			</script>

			";

			} 

		mysqli_close($con);		

	}

?>



</head>

<body id="login"> 

 

<!-- Start: login-holder -->

	<div id="wrapper_login">

			<header id="logo_login">

				<a href="#"  alt="logo" title="logo" /></a>

			</header>

			    <div class="container">

				  <form class="form-signin" action='' method='POST' name="loginForm" onsubmit="return loginCheckMail();">

					<label for="inputEmail" class="sr-only">Email address</label>

					<input type="email" id="inputEmail" class="form-control" name="Mail" placeholder="Email address" required autofocus>

					<label for="inputPassword" class="sr-only">Password</label>

					<input type="password" id="inputPassword" class="form-control" name="Password" placeholder="Password" required>

					<button id="loginBut" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

				  </form>

				</div> <!-- /container -->

    </div>

  </body>

</html>