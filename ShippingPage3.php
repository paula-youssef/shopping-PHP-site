<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(a.jpg);
}
-->
</style></head>
<body>
<?php



   $con = mysqli_connect("localhost","root","","shopping"); 
 

 $TSA = $_POST["TransactionID"];
 $ShCop = $_POST["ShippingCompany"];
 $TRNU=$_POST["TrackingNumber"]; 

   


$sql=" UPDATE orderprocessing  SET  ShippingCompany='$ShCop', TrackingNumber='$TRNU' , Shipped= '1' where TransactionID='$TSA' " ;


if (!mysqli_query($con,$sql))
  {
 die("error" );
  }
echo "record added";
     echo "<br>";

echo "You  information has been change successfully go back  if you want to Update Anather Shipped"."<br>".
		"<form action=\"ShippingPage1.html\">".
		" <input type=\"submit\" value=\"Back\"/>" .
		"</form>";
       echo "<br>";



	?>
</body>
</html>