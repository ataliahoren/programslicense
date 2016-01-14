$(document).ready(function () {   
       $(".dropdown-toggle").hover(function () {   
         $(".dropdown-menu").show();      
    });
    
       $(".dropdown-menu").hover(function () {   
         $(".dropdown-menu").show();
   }, function() {  
         $(".dropdown-menu").hide();
    });

    $(".dropdown-toggle").mouseout(function() { 
    	$(".dropdown-menu").hide();
    });
    
    $('#myTabs a').click(function (e) {
  e.preventDefault()
  $(this).tab('show')
});

   /*nav*/
$("#update").click(function()  {
    	 alert("select first the license that you want to update")
}); 

$("#assign").click(function()  {
    	 alert("select first the license that you want to assign")
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
'<li><a href="LicenseSelect.php">Search License</a></li>'+
'<li><a id="update" href="LicenseSelect.php">Update Exsisting Contract/Project</a></li>'+
'<li><a href="LicenseCreate.php">Create new License Contract</a></li>'+
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