<?php
ob_start();
session_start();
include "configFile.php"
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
            <h1>Search License</h1>
            <h2>Search By:</h2>
            <nav class="searchLicense">
<?php
				// define variables and set to empty values
				$pNameErr=$lNameErr = "";
				$pName=$lName= "";
				$error_flagLName = true;				$error_flagPName = true;				
				if ($_SERVER["REQUEST_METHOD"] == "POST") {
				     $pName = test_input($_POST["pName"]);					
				     // check if name only contains letters and whitespace
				     if (!preg_match("/^[a-zA-Z ]*$/",$pName)) {
				       $pNameErr = "Only letters and white space allowed";
					   $error_flagPName = false;
				     }
										
				     $lName = test_input($_POST["lName"]);						
				     // check if name only contains letters and whitespace
				     if (!preg_match("/^[a-zA-Z ]*$/",$lName)) {
				       $lNameErr = "Only letters and white space allowed";
					   $error_flagLName = false;
				     }				   }
				   function test_input($data){
				   $data = trim($data);
				   $data = stripslashes($data);
				   $data = htmlspecialchars($data);
				   return $data;
				}								
				if( isset($_POST['pName'])&& error_flagLName && $_POST['pName']!= '' )
				{										
					header('Location: ProjectName.php?pName='.$_POST['pName']);
				}				
				if( isset($_POST['lName']) && $error_flagLName && $_POST['lName']!= '' )
				{									
					header('Location: LicenseName.php?lName='.$_POST['lName']);
				}		
?>
				<form  method="POST" name="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">					
				  <div class="form-group">
				    <label for="exampleInputProject">Project Name</label>
				    <input type="text" name="pName" class="form-control" placeholder="Project Name" value="<?php echo $pName;?>"/>
					<span class="error"><?php echo $pNameErr;?></span><br>
				  </div>				  
				  <div class="form-group">
				    <label for="exampleInputPassword1">License Name</label>
				    <input type="text" name="lName" class="form-control" placeholder="License Name"value="<?php echo $lName;?>"/>
					<span class="error"><?php echo $lNameErr;?></span><br>
				  </div>
	                        <div class="form-group">	                             <input class="add" type="submit" class="btn btn-default" value="Search"/>
	                         </div>
				</form>
			</nav>
          </section>
		  <section id="resultePhp">
		 <?php			
				$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
				if (!$conn) // Check connection
				{	
				    die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT \n"
					. "licenses_contract_219.lcID,\n"
					. "licenses_contract_219.lName,\n"
					. "licenses_contract_219.cID,\n"
					. "licenses_contract_219.Amount,\n"
					. "licenses_contract_219.startDate,\n"
					. "licenses_contract_219.endDate,\n"
					. "licenses_contract_219.File\n"
					. "From licenses_contract_219\n"
					. "ORDER BY licenses_contract_219.lName";	
				$result = $conn->query($sql);/*
				if ($result->num_rows > 0) {					echo "<h1>Licences Contracts</h1>";					
				    echo "<table><tr><th>license ID</th><th>license Name</th><th>Company ID</th><th>Amount</th><th>Start Date</th><th>End Date</th>
						<th>File</th></tr>";
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr>
								<td>".$row["lcID"]."</td>
								<td>".$row["lName"]."</td>
								<td>".$row["cID"]."</td>
								<td>".$row["Amount"]."</td>
								<td>".$row["startDate"]."</td>
								<td>".$row["endDate"]."</td>
								<td>".$row["File"]."</td>
								</tr>";
				    }
				    echo "</table>";
				} else {
				    echo "0 results";
				}*/
				mysqli_close($conn);
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
<?php session_destroy();?>