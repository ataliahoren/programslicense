<!DOCTYPE html>
<html>
<head>
	<title>Program license-Login</title>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="includes/style.css">
	<script src="includes/jquery-1.11.3.min.js"></script>
	<script src="includes/script.js"></script>
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
					<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
					<label for="inputPassword" class="sr-only">Password</label>
					<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
					<div class="checkbox">
					  <label>
						<input type="checkbox" value="remember-me"> Remember me
					  </label>
					</div>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
				  </form>
				</div> <!-- /container -->
    </div>
  </body>
</html>