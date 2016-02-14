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
	<title>Program licence-View</title>
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

          <section id="searchContent">
            <h1>Search Licence To View Or Update</h1>
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
				<form action="#" method="POST" name="LicenseNameForm">					
				  <div class="form-group">
				    <label for="exampleInputProject">Project Name</label>
				    <input type="text" name="pName" class="form-control" placeholder="Project Name"/>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Licence Name</label>
				    <input type="text" name="lName" class="form-control" placeholder="License Name"/>
				  </div>
				 <div class="form-group">
					 <input id="add" type="submit" class="btn btn-default" value="Search"/>
				  </div>
				</form>
			</nav>
          </section>
		  <section id="resultePhpL">
		 <?php
				$conn = mysqli_connect($servername, $username, $password, $dbname); // Create connection
				if (!$conn) // Check connection
				{	
				    die("Connection failed: " . mysqli_connect_error());
				}				
							if( isset($_GET['lName']) ){					
							$lNameG = $_GET['lName'];				
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
				WHERE lName = '$lNameG'";
							
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
					echo "<h4>Licences</h4>";
				    echo "<table><tr><td>License Name</td><td>License ID</td><td>Company ID</td>
								<td>Project Amount</td><td>start Date</td><td>end Date</td><td>File</td><td>Comments</td>
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
								$lcIDL =$row['lcID'];
								$cIDL =$row['cID'];
								$AmountL =$row['Amount'];
								$startDateL =$row['startDate'];
								$endDateL =$row['endDate'];
								$FileL =$row['File'];
								$CommentsL =$row['Comments'];
								
				    }
				    echo "</table>";
				} else {
				    echo "license $lNameG not found" ;
				}
				mysqli_close($conn);
				?>
				<?php
				$_SESSION['lName'] = $lNameG;
				//print_r($_SESSION['lName']);	
				$_SESSION['lcID'] = $lcIDL;
				//print_r($_SESSION['lcID']);
				$_SESSION['cID'] =$cIDL;
				//print_r($_SESSION['cID']);
				$_SESSION['Amount'] =$AmountL;
				//print_r($_SESSION['Amount']);
				$_SESSION['startDate'] =$startDateL;
				//print_r($_SESSION['startDate']);
				$_SESSION['endDate'] =$endDateL;
				//print_r($_SESSION['endDate']);
				$_SESSION['File'] =$FileL;
				//print_r($_SESSION['File']);
				$_SESSION['Comments'] =$CommentsL;
				//print_r($_SESSION['Comments']);
				?>
				<input id="export" class="btn btn-default" type="button" onclick="location.href='ExportToExcelLicenseName.php?lName=<?php $_SESSION['lName']; print_r($_SESSION['lName']);?>';" value="Export To Excel"/>
				<input id="update" class="btn btn-default" type="button" onclick="location.href='updateLisence.php?lName=<?php $_SESSION['lName']; print_r($_SESSION['lName']);?>
				&&?lcID=<?php $_SESSION['lcID'];print_r($_SESSION['lcID']);?>
				&&?cID=<?php $_SESSION['cID'];print_r($_SESSION['cID']);?>
				&&?Amount=<?php $_SESSION['Amount'] ;print_r($_SESSION['Amount']);?>
				&&?startDate=<?php $_SESSION['startDate'];print_r($_SESSION['startDate']);?>
				&&?endDate=<?php $_SESSION['endDate'];print_r($_SESSION['endDate']);?>
				&&?File=<?php $_SESSION['File'];print_r($_SESSION['File']);?>
				&&?Comments=<?php $_SESSION['Comments'];print_r($_SESSION['Comments']);?>
				';" value="update Lisence"/>
		</section>
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
<?php
$_SESSION['pName'] = "";
$_SESSION['lName'] = "";
?>

