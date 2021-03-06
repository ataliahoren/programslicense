<?php
session_start();
ob_start();
include "configFile.php";

if (! ($_SESSION['logged_in']))
{
	echo "<script> 

	alert('You are not logged in, please connect');

	window.location = 'index.php';

	</script>";
}
?>

<!DOCTYPE html>


<html>

<head>

	<title>Program licence-Create</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="includes/style.css">
	<script src="includes/jquery-1.11.3.min.js"></script>
	<script src="includes/script.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1"> 

</head>

<body>

    <div id="wrapper">

    	<header>

			<a href="home.php" id="logo" alt="logo" title="logo" /></a>

			<section id="user">

				<span class="glyphicon glyphicon-user" aria-hidden="true"></span>

				<p><?php $_SESSION['Mail']; print_r($_SESSION['Mail']);?> |
				<a href="index.php" onclick=Logout();>
				<?php
				
				echo "<script> 
				    function Logout () {				    	
				        alert('logged out');
				        window.location = 'index.php';
				    }
				</script>";
				?>
				Log Out</a></p>

		     </section>
			 <ul class="nav nav-tabs">
                <li><a href="home.php">Home</a></li>
                <li class="active">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Licences <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="LicenseSelect.php">Search/Update Licence </a></li>
                            <li><a href="LicenseCreate.php">Create new Licence Contract</a></li>
                           </ul>
                <li><a href="LicenseAlerts.php">Notifications</a></li>
	         </ul>

	    </header>    

        <main> 

          <section class="mobileMenu">
    		<nav role="navigation" class="navbar navbar-default">
    		<div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            </div>
       
        	<div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Home</a></li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Licences<b class="caret"></b></a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="LicenseSelect.php">Search/Update Licence</a></li>
                        <li><a href="LicenseCreate.php">Create New Licence</a></li>
                    </ul>
                </li>
                <li><a href="LicenseAlerts.php">Notifications</a></li> 
            </ul>
        	</div>
    		</nav>
		</section>

          
          <section id="content">

			    <h1>Create Licence - create new</h1>

                <h2>Fill in the following fields:</h2>
                
                <h3>(*) Required</h3>

                <nav class="CreateLicense">

				    <form action="LicenseCreate1.php" method="post" name="CreateForm">

				    	<section class="formCol">

				    		<div class="form-group">

					    		<label>Licence ID (*)</label>

					    		<input type="number" class="form-control" placeholder="License ID"  min="1" max="999" name="lcID" required title="please enter max 3 numbers" />

					    	 </div>

							 <div class="form-group">

	                         	<label>Licence Name (*)</label>

	                         	<input type="text" class="form-control" placeholder="Program Name" name="lName" required max="50"/>

	                         </div>

							 <div class="form-group">

					    		<label>Company ID (*)</label>

					    		<input type="number" class="form-control" placeholder="Company ID" name="cID" required min="1" max="999" title="please enter max 3 numbers" />

					    	 </div>

	                         <div class="form-group">

	                            <label>Start Date</label>

	                            <input type="date" class="form-control" name="startDate" />

	                         </div>

	                         <div class="form-group">

	                          	<label>End Date</label>

	                          	<input type="date" class="form-control" name="endDate" />

	                         </div>

				    	</section>

						<section class="formCol">

							<div class="form-group">

	                            <label>Amount (*)</label>

	                            <input type="number" class="form-control" placeholder="amount" name="Amount" min="0" max="999" required/>

	                         </div>

                    		<div class="form-group">

	                    		<label>Attach File</label>

	                    		<input type="file" class="form-control" name="file" />

	                        </div>

	                    	<div class="form-group">

	                           	<label>Comments</label>

	                           	<textarea id="comments" class="form-control" placeholder="comments" rows="4" name="Comments"></textarea>

	                       </div>

	                        <div class="form-group">

	                        	<input id="box" type="checkbox" class="form-control" name="Permissiom" checked/> 

	                           	<label>Public Licence?</label>

	                        </div>

	                        <div class="form-group">

	                           	<input class="btn btn-default" type="submit" value="Create Licence">	                         

	                        </div>

                		</section>

						<div class="clear"></div>

				    </form>

			    </nav>

          </section>

	    </main>

     </div>
	    <footer>
				<p><a href="http://ataliahoren.github.io/programslicense/" target="_blank">.Copyright &copy; AMR</p>
				<p>Miri Haikin, Atalia Schuster, Rotem Emergi</p>
	    </footer>

        <script>

            (function() {

                })();

        </script>

    </body>

</html>

