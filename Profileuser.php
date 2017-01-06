<!DOCTYPE html>
<html>
<?php


?>
<head>
<style>
.center {
	margin-left:auto;
	margin-right: auto;
	margin-top:20%;
	margin-right:30%;
	width: 30%;
	background-color: #F03;
	background-position: center;
	
}
#said{
	background-color: #00F;
	color:white;
	margin-top:10%;
	margin-left:80%;
	width: 20%;
		
}
input {
	width:180px;
	clear:left;
	text-align:right;
	padding-right:10px;
	float:right;
	background-color: #FFF;
}


#s {
	background-color: #FFF;
	font-weight: bold;
}
#bar {
	background-color: #00F;
	color: #FFF;
}
#bar {
	font-weight: bold;
}
#bar {
	font-size: 24px;
}
.center #s {
	font-size: 18px;
	font-weight: bold;
}
.k {
	font-weight: normal;
}
.center #s #said {
	font-weight: bold;
}
.center #s #said {
	font-size: 24px;
	font-weight: normal;
}
.k {
	font-size: 18px;
}
.l {
	font-size: 18px;
}
.said {
	font-size: 18px;
}
body {
	background-color: #FFF;
}
</style>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"></head>
<body>
<div id="bar"><h1>update info<h1> </div>
<div class="center">
<form  id="s" name ="signup" action="updateuser.php"  method="POST">
<b>First Name *<b> :<input type="text" name="firstname" required="required"> </br> </br></br>
<b>Last Name * <b>:<input type="text" name="lastname" required="required"> </br> </br></br>
<b>Password * <b>:<input type="password" name="password" required="required"> </br></br></br>
<b> Phone * <b>:<input type="text" name="phone" required="required"> </br>  </br> </br>
<b> Address * <b>:<input type="text" name="address" required="required"> </br>  </br> </br>
 
<button id="said" class="said" name="signup" >saving</button>
</form>
</div>
</body>
</html>