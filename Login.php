<!DOCTYPE html>
<html>
<head>
	<title>Program license-Login</title>
	<link rel="stylesheet" href="includes/style.css">
	<script src="includes/jquery-1.11.3.min.js"></script>
	<script src="includes/script.js"></script>
</head>
<body id="login" dir="rtl"> 
 
<!-- Start: login-holder -->
	<div id="wrapper_login">
			<header id="logo_login">
				<a href="#"  alt="logo" title="logo" /></a>
			</header>
			<div class="clear"></div>
			<nav id="loginbox">
				<form action='' method='POST' name="loginForm" onsubmit="return loginCheckMail();">						
							<label>UserName<input type="text" name="user"/></label>
                            </br>
							<label>Password<input type="password"  class="login_inp" name="pass"/></label>
                            </br>
							<label>Remember me<input type="checkbox" class="checkbox-size"/></label>
							<input type="submit" class="submit_login" value="Login"/>
				</form>
			</nav>
    </div>
  </body>
</html>