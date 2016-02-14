/*custom font for text*/

@import url(http://fonts.googleapis.com/css?family=Nunito);



/*Basic reset*/

* {margin: 0; padding: 0;}



header,section,nav,aside,footer,main, article {

    display:block;

}



body {

	background: url(../images/content_repeat.jpg) repeat-x;	

	font-family: Nunito, arial, verdana;

}



#logo{

    height: 85px;

    background: url(../images/elbit.png);

    background-repeat: no-repeat;

    position: relative; left: 1120px;

    display: block;

}



#wrapper {

    margin: 0px auto;

    width:100%;

}



header {

    width:100%;

    height:90px;

}



.clear { clear:both; }



main{	

    height: 460px;

    width: 100%;

    position: absolute; top:138px; left:4px;

}



footer{

    background: #004a8f;

    height: 10px;

}



#menu, #menu2 {

	background: #003545;;

}





#menu {

	width: 250px;

    color: white;

}



 #menu2 h3 a{

	color: white;

    text-decoration: none;

 }



#menu2 {

    width:100%;

    position: absolute; left:250px; top:90px;



}



/*heading styles*/

#menu h3, #menu2 h3 {

	font-size: 16px;

	line-height: 34px;

	background: #004a8f; 

}



#menu h3 {

	padding: 0 70px;

}





/*heading hover effect*/

#menu h3:hover, #menu2 h3:hover {

	text-shadow: 0 0 1px rgba(255, 255, 255, 0.7);

}



/*list items*/

#menu li, ul, #menu2 ul li {

	list-style-type: none;

}





/*links*/

#menu ul ul li a {

	color: white;

	text-decoration: none;

	font-size: 13px;

	line-height: 24px;

	padding: 0 19px;

    position:relative;

    z-index:999;

    background: #003545;

}

/*hover effect on links*/

#menu ul ul li a:hover {

	background: #003545;

	border-left: 5px solid lightgreen;

}

/*Lets hide the non active LIs by default*/

#menu ul ul {

	display: none;

}





/*content area*/



#content h1 {

    font-size: 20px;

    line-height: 24px;

    font-weight: bold;

    padding: 10px;

    color: #717171;

}

#content h2{

    font-size: 17px;

     padding: 10px;

     text-decoration: underline;

}

#content ul li{

    font-size: 15px;	

    padding-left: 40px;

    padding-top: 12px;

    padding-bottom: 12px;

    background: url(../images/home_list.png) no-repeat left center;

}



#content ul li a:hover, #content ul li a:link, #content ul li a:visited {

	text-decoration: none;

    color: #004a8f;

}



/*footer*/



#buttom{

   width: 100%;

   height: 25px;

   position:absolute; top:620px;

   padding-top: 5px;	

}

footer a:link, footer a:visited, footer p

{

    font-size: 15px;

	text-decoration: none;

	color: #000000;

}





/*************login page************/



#login{

	background: url(../images/login_bg1.jpg) no-repeat top center;

}



#wrapper_login{

	margin: 0px auto;

	width: 508px;

}



#logo_login{

	float: left;

	height: 90px;

	margin: 120px 0 0 15px;

	background: url(../images/elbit.png);

	background-repeat: no-repeat;

}



#loginbox	{

	background: url(../images/loginbox_bg1.png) no-repeat;

	font-size: 12px;

	height: 212px;

	padding-top: 60px;

	position: relative;

	width: 508px;

}

#loginBut
{
	margin-top:10px;
}

 /**form*/

#loginbox form{

    position: absolute; left:20px;

}



#loginbox label{

   display: table-cell;

   font-weight: bold;

   font-size: 17px;

   padding: 0 0 15px 0;

}



#loginbox form label input{

	position: absolute; left: 140px;		

    border-radius: 5px;

    width: 270px;

    padding: 5px;

    margin-bottom: 15px;

}



.submit_login{

	background: url(../images/inp_login1.png) no-repeat;

	height:32px;

	border: none;

	cursor: pointer;

	font-weight: bold;

	display: block;

	font-size: 12px;

	color: #fff;

	position: absolute; left: 360px; top:160px;

    width: 110px;

}



.submit_login:hover	{

	color: #004a8f;

}

	 

/*********search lisense*******/

.searchLicense label, .CreateLicense label{



   font-weight: bold;

   font-size: 17px;

   position: relative; left: 20px;

   color: #004a8f;



}



.searchLicense form label input, .CreateLicense form label input{

	position: relative; left:20px;		

    border-radius: 15px;

    width: 250px;

    height: 20px;

    margin-bottom: 10px;

}



#send{

	position: relative; left:20px;		

    border-radius: 15px;

    width: 80px;

    height: 20px;

    margin-bottom: 10px;

}



/*********create lisense*******/

#comments{

	position: relative; left:20px;		

    border-radius: 15px;

    width: 250px;

    height: 60px;

    margin-bottom: 10px;

}



/*******notofications*********/

#content h3{

    margin-left: 10px;

    margin-bottom: 5px;

    color: #004a8f;

}

Status API Training Shop Blog About Pricing

© 2016 GitHub, Inc. Terms Privacy Security Contact Help