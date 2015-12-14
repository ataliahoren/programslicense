<!DOCTYPE html>
<html>
<head>
	<title>Program license-Create</title>
	<link rel="stylesheet" href="includes/style.css">
	<script src="includes/jquery-1.11.3.min.js"></script>
	<script src="includes/script.js"></script>
</head>
	<body>
    <div id="wrapper">
    	<header>
			<a href="Home.php" id="logo" alt="logo" title="logo" /></a>
	    </header>
        <nav id="menu">
	        <ul>
		        <li>
			        <h3>Licenses</h3>
			        <ul>
					        <li><a href="LicenseSelect.php">Search License</a></li>
					        <li><a href="LicenseUpdate.php">Update Exsisting Contract/Project</a></li>
					        <li><a href="LicenseCreate.php">Create new License Contract</a></li>
			        </ul>
		        </li>
	        </ul>
        </nav>
        <nav id="menu2">
            <ul>
        		 <li>
			       <h3><a href="LicenseAlerts.php">Notifications</a></h3>
		        </li>
            </ul>
        </nav>
        <main> 
          <section id="content">
			    <h1>Create License</h1>
                <h2>Fill in The following information:</h2>
                <nav class="CreateLicense">
				    <form action='' method='POST' name="loginForm" onsubmit="return loginCheckMail();">						
                    			<label>Company Name<input type="text" name="lName"/></label>
                                 </br>
							    <label>Progrm Name<input type="text" name="lName"/></label>
                                </br>
                                 <label>Start Date<input type="date" name="startDate" /></label>
                                  </br>
                                <label>End Date<input type="date" name="endDate" /></label>
                                </br>
                                 <label>Amount<input type="number" name="amount" min:0/></label>
                                  </br>
                                <label>Attach File<input type="file" name="file" /></label>
                                </br>
                                <label>Are you agree to other people watch this lisence?<input type="checkbox" name="Permissiom" /></label>
                                </br>
                                <label>Comments<input id="comments" type="text" name="Comments"/></label>
                                </br>
                                <label><input id="send" type="submit" value="Create"/></label>
				    </form>
			    </nav>
          </section>
	    </main>
         <div class="clear"></div>
     </div>
	    <footer id="buttom">
	    <p>.Copyright &copy; 
	    <a href="https://il.linkedin.com/in/ataliaschuster" target="_blank">Atalia Schuster&nbsp; |</a>&nbsp;
	    <a href="mailto:ataliahoren@gmail.com">ataliahoren@gmail.com</a> </p>
	    </footer>
        <script>
            (function() {
                })();
        </script>
    </body>
</html>