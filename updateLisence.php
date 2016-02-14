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
<?php
$_SESSION['lName']= $_GET['lName'];
$lNameL = $_SESSION['lName'];
$lcIDL = $_SESSION['lcID'];
$cIDL = $_SESSION['cID'];
$AmountL = $_SESSION['Amount'];
$startDateL = $_SESSION['startDate'];
$endDateL = $_SESSION['endDate'];
$FileL = $_SESSION['File'];
$CommentsL = $_SESSION['Comments'];
?>
<!DOCTYPE html>
<html>

<head>

	<title>Program licence-Update</title>

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

			    <h1>Update Existing Licence</h1>

                <h2>change the fields you want to update:</h2>
                
                <h3>(*) Required</h3>

                <nav class="CreateLicense">

				    <form action="LicenseSelectAfterupdate.php" method="post" name="CreateForm">

				    	<section class="formCol">

				    		<div class="form-group">

					    		<label>Licence ID (*)</label>

					    		<input type="number" class="form-control" placeholder="License ID" min="1" max="99999" name="lcID" required title="please enter max 5 numbers" value ="<?php echo $lcIDL ?>" />

					    	 </div>

							 <div class="form-group">

	                         	<label>Licence Name (*)</label>

	                         	<input type="text" class="form-control" placeholder="Licence Name" name="lName" required max="50" value="<?php echo $lNameL ?>"/>

	                         </div>

							 <div class="form-group">

					    		<label>Company ID (*)</label>

					    		<input type="number" class="form-control" placeholder="Company ID" name="cID" required min="1" max="9999999" title="please enter max 7 numbers" value="<?php echo $cIDL ?>"/>

					    	 </div>

	                         <div class="form-group">

	                            <label>Start Date</label>

	                            <input type="date" class="form-control" name="startDate" value="<?php echo $startDateL ?>" />

	                         </div>

	                         <div class="form-group">

	                          	<label>End Date</label>

	                          	<input type="date" class="form-control" name="endDate" value="<?php echo $endDateL?>"/>

	                         </div>

				    	</section>

						<section class="formCol">

							<div class="form-group">

	                            <label>Amount (*)</label>

	                            <input type="number" class="form-control" placeholder="amount" name="Amount" min="0" max="999" required value="<?php echo $AmountL?>"/>

	                         </div>

                    		<div class="form-group">

	                    		<label>Attach File</label>

	                    		<input type="file" class="form-control" name="file" value="<?php echo $FileL ?>"/>

	                        </div>

	                    	<div class="form-group">

	                           	<label>Comments</label>

	                           	<textarea id="comments" class="form-control" placeholder="comments" rows="4" name="Comments"value="<?php echo $CommentsL ?>"></textarea>

	                       </div>

	                        <div class="form-group">

	                        	<input id="box" type="checkbox" class="form-control" name="Permissiom" checked/> 

	                           	<label>Public Licence?</label>

	                        </div>

	                        <div class="form-group">

	                            <input class="add" type="submit" class="btn btn-default" value="Save"/>

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

