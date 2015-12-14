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
					<section id="login_inner">
						<article>
							<p><b>UserName</b></p>
							<p><input type="text" class="login_inp" name="user" style="direction:ltr;"/></p>
						</article>
						<article>
							<p><b>Password</b></p>
							<p><input type="password" name="pass" class="login_inp" style="direction:ltr;"/></p>
						</article>
						<article>
							<th></th>
							<p valign="top"><input type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Remember me</label></p>
						</article>
						<article>
							<th></th>
							<p><input type="submit" class="submit_login" value="Login"/></p>
						</article>
					</section>
				</form>
			</nav>
</div>
</body>
</html>