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

	<title>Program licence-Alerts</title>
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
                <li>
                    <a href="LicenseSelect.php" data-toggle="dropdown" class="dropdown-toggle">Licences <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="LicenseSelect.php">Search/Update Licence </a></li>
                            <li><a href="LicenseCreate.php">Create new Licence Contract</a></li>
                           </ul>
                <li class="active"><a href="#">Notifications</a></li>
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

            <h1>Notifications</h1>


				 <h3>Projects without licences</h3>
	    </section> 
         <div class="clear"></div>
	 <section id="resultePhpWithoutP">	 
		 <?php
				$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
				if (!$conn) // Check connection
				{	
				    die("Connection failed: " . mysqli_connect_error());
				}
				
				
				$sql = "SELECT projects_219.pName,
						projects_219.pID,
						projects_219.StartDate,
						projects_219.EndDate,
						projects_219.Client,
						projects_219.Country,
						projects_219.Comments,
						projects_219.Status,
						licenses_proj_219.lcID, 
						licenses_proj_219.lcAmount, 
						licenses_proj_219.pID, 
						licenses_proj_219.pAmount 
						FROM projects_219
						join licenses_proj_219 ON projects_219.pID = licenses_proj_219.pID 
						WHERE licenses_proj_219.lcID = 0 AND licenses_proj_219.pAmount = 0 ";
							
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    echo "<table><tr><td>Project Name</td><td>Project ID</td><td>Start Date</td>
								<td>End Date</td><td>Client</td><td>Country</td><td>pAmount</td>
								<td>lcID</td><td>lcAmount</td><td>Comments</td>
						</tr>";
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>
								<td>".$row["pName"]."</td>
								<td>".$row["pID"]."</td>
								<td>".$row["StartDate"]."</td>
								<td>".$row["EndDate"]."</td>
								<td>".$row["Client"]."</td>
								<td>".$row["Country"]."</td>
								<td>".$row["lcID"]."</td>
								<td>".$row["lcAmount"]."</td>
								<td>".$row["pAmount"]."</td>
								<td>".$row["Comments"]."</td>
								</tr>";
				    }
				    echo "</table>";
				} else {
				    echo " All Projects With Licenses";
				}
				mysqli_close($conn);				
				?>
			<input id="export2" class="btn btn-default" type="button" onclick="location.href='ExportProjectswithoutlicences.php'" value="Export To Excel"/>
		<section>   
	    </main>

         <div class="clear"></div>

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