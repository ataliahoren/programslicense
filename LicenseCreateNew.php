<!DOCTYPE html>
<?php
ob_start();
include "configFile.php"
?>
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
			    <h1>Create License - create new</h1>
                <h2>Fill in the following fields:</h2>
                <nav class="CreateLicense">
				    <form action="LicenseCreate.php" method="post" name="CreateForm">
				    	<section class="formCol">
				    		<div class="form-group">
					    		<label>License ID</label>
					    		<input type="text" class="form-control" placeholder="License ID"pattern="[0-9]{3}" name="lcID" required title="please enter only 3 numbers" />
					    	 </div>
							 <div class="form-group">
	                         	<label>License Name</label>
	                         	<input type="text" class="form-control" placeholder="Program Name" name="lName" required max="50"/>
	                         </div>
							 <div class="form-group">
					    		<label>Company ID</label>
					    		<input type="text" class="form-control" placeholder="Company ID" name="cID" required pattern="[0-9]{3}" title="please enter only 3 numbers" />
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
	                            <label>Amount</label>
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
	                           	<label>Public License?</label>
	                           
	                        </div>
	                        <div class="form-group">
	                            <input class="add" type="submit" class="btn btn-default" value="Create"/>
	                        </div>
                		</section>
						<div class="clear"></div>
				    </form>
			    </nav>
          </section>
	    </main>
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
