<!DOCTYPE html>
<html>
<head>
	<title>Program license-Create</title>
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
<body>
    <div id="wrapper">
    	<header>
			<a href="index.html" id="logo" alt="logo" title="logo" /></a>
			<section id="user">
				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
				<p>Atalia Schuster |<a href="login.php">Log Out</a></p>
		     </section>
			<ul class="nav nav-tabs">
			  <li role="presentation"><a href="index.html" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
			  <li role="presentation" class="active">
			     <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
			      Licenses <span class="caret"></span></a>
			    <script>document.write(submenu)</script>
			  </li>			
			  <li role="presentation"><a href="LicenseAlerts.html" aria-controls="Notifications" role="tab" data-toggle="tab">Notifications</a></li>
				</ul>
	    </header>
        <main> 
          <section id="content">
			    <h1>Create License</h1>
                <!--<h2>Choose your step:</h2>-->
                <nav class="CreateLicenseBar">
                	<section>
                		<a href="LicenseCreateNew.php" target="_blank"><button>Create New</button></a>
                	</section>
                	<section>
                		<a id="assign" href="LicenseSelect.php" target="_blank"><button>Assign to project</button></a>
                	</section>
			    </nav>
          </section>
	    </main>
         <div class="clear"></div>
     </div>
	    <footer id="buttom">
			<p>.Copyright &copy; | MAR - Miri Haikin, Atalia Schuster, Rotem Emergi | <a href="https://il.linkedin.com/in/ataliaschuster" target="_blank">CONTACT US</a>
	    </footer>
        <script>
            (function() {
                })();
        </script>
    </body>
</html>