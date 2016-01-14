<?php
ob_start();
session_start();
include "configFile.php";
if( isset($_SESSION['lName']) )
{
	$lName = $_SESSION['lName'];
	echo $lName;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Program license-View</title>
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
          <section id="searchContent">
            <h1>Srearch License</h1>
            <h2>Search By:</h2>
            <nav class="searchLicense">
				
				<form action='' method='POST' name="loginForm" onsubmit="return loginCheckMail();">					
				  <div class="form-group">
				    <label for="exampleInputProject">Project Name</label>
				    <input type="text" name="pName" class="form-control" placeholder="Project Name"/>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">License Name</label>
				    <input type="text" name="lName" class="form-control" placeholder="License Name"/>
				  </div>
				 <div class="form-group">
					 <input class="add" type="submit" class="btn btn-default" value="Search"/>
				  </div>
				</form>
			</nav>
          </section>
		  <div class="clear"></div>
		  <section id="resultePhp2">
		 <?php
				$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
				if (!$conn) // Check connection
				{	
				    die("Connection failed: " . mysqli_connect_error());
				}
			
				$sql = "SELECT licenses_contract_219.lName, 
				licenses_contract_219.lcID,
				licenses_contract_219.cID,				
				licenses_contract_219.Amount, 
				licenses_contract_219.startDate, 
				licenses_contract_219.endDate, 
				licenses_contract_219.File, 
				licenses_contract_219.Comments 
				FROM licenses_contract_219 
				ORDER BY licenses_contract_219.lName";
							
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				    echo "<table><tr><th>License Name</th><th>License ID</th><th>Company ID</th>
								<th>Project Amount</th><th>start Date</th><th>end Date</th><th>File</th><th>Comments</th>
						</tr>";
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>
								<td>".$row["lName"]."</td>
								<td>".$row["lcID"]."</td>
								<td>".$row["cID"]."</td>
								<td>".$row["Amount"]."</td>
								<td>".$row["startDate"]."</td>
								<td>".$row["endDate"]."</td>
								<td>".$row["File"]."</td>
								<td>".$row["Comments"]."</td>
								</tr>";
				    }
				    echo "</table>";
				} else {
				    echo "0 results";
				}
				mysqli_close($conn);
				session_destroy();
				?>
		</section>
	    </main>
         <div class="clear"></div>
     </div>
	    <footer id="buttom">
			<p>.Copyright &copy; | MAR - Miri Haikin, Atalia Schuster, Rotem Emergi | <a href="https://il.linkedin.com/in/ataliaschuster" target="_blank">CONTACT US</a> </P>
	    </footer>
        <script>
            (function() {
                })();
        </script>
    </body>
</html>
<?php session_destroy();
?>