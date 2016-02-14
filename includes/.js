
$(document).ready(function() {
	$.getJSON("data/info.json", function(data) {
		$('#mainContent h1').html(data.mainTitle);
		$('#mainContent h2').html(data.subTitle);
		$('#mainContent').append("<ul>");
		$.each(data.options, function() {
				$('#mainContent').append("<li><a href="+ this.link + ">"
									+ this.name + "</a></li>");
		});
		$('#mainContent').append("</ul>");
	});
}); 

$(document).ready(function () {   

       $("header .dropdown-toggle").hover(function () {   

         $("header .dropdown-menu").show();      

    });

    

       $("header .dropdown-menu").hover(function () {   

         $("header .dropdown-menu").show();

   }, function() {  

         $("header .dropdown-menu").hide();

    });



    $("header .dropdown-toggle").mouseout(function() { 

    	$("header .dropdown-menu").hide();

    });

    

    $('#myTabs a').click(function (e) {

  e.preventDefault()

  $(this).tab('show')

});



   /*nav*/

$("#update").click(function()  {

    	 alert("select first the licence that you want to update")

}); 



$("#assign").click(function()  {

    	 alert("select first the licence that you want to assign")

}); 





 

/*var msg =  document.createElement('div');

msg.id = 'dialog';

msg.title = 'information';

var p =  document.createElement('p');

p.innerHTML = 'please select first the license that you want to assign';

var appendmsg = document.getElementById("dialog")[0].appendChild(p);

var alert = document.getElementById("assign");

 alert.addEventListener(click, function() {

	 this[0].appendChild(appendmsg);

}); */



 

$('#myTabs a[href="#profile"]').tab('show') // Select tab by name

$('#myTabs a:first').tab('show') // Select first tab

$('#myTabs a:last').tab('show') // Select last tab

$('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)

});



var submenu=' <ul class="dropdown-menu">' + 

'<li><a href="LicenseSelect.php">Search Licence</a></li>'+

'<li><a id="update" href="LicenseSelect.php">Update Existing Contract/Project</a></li>'+

'<li><a href="LicenseCreate.php">Create new Licence Contract</a></li>'+

'</ul>' 






/*login*/

/*

function forgotCheckMail(){

	var x = document.forms["loginForm"]["email"].value;

	var atpos=x.indexOf("@");

	var dotpos=x.lastIndexOf(".");

	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){

	  alert("illegal mail address - please try again");

	  return false;

	}

}



function loginCheckMail(){

	var i = 0;

	var x = document.forms["loginForm"]["user"].value;

	var y = document.forms["loginForm"]["pass"].value;

	if (!y) {

		alert("illegal mail address or password - please try again");

		return false;

		}

	if (/[@#$&*^%!+=\/\\[\]|?.,<>)(;:'"~`]/.test(y) === true) {

		alert("illegal mail address or password - please try again");

		return false;

		}

	var atpos=x.indexOf("@");

	var dotpos=x.lastIndexOf(".");

	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length){

	  alert("illegal mail address or password - please try again");

	  return false;

	}

	return true;

}

*/