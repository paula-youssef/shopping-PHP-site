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


$SID = $_POST["shipped"];

if($SID != 1 && $SID != 0)
{
   echo "Please Enter Vailed number".
  "<form action=\"ShippingPage1.html\">".
		" <input type=\"submit\" value=\"Back\"/>" .
		"</form>";
       echo "<br>";

}
else
{
$con = mysqli_connect("localhost","root","","shopping"); 
 

$sql="select *from orderprocessing  ";

$result = mysqli_query($con,$sql);
 

 while($row = mysqli_fetch_array($result)){
      

       if($row['Shipped']==$SID){
	  echo"TransactionID";
          echo "<br>" ;
          
           
        echo $row['TransactionID'];
        echo "<br>";
       
        echo "<br>";

		
	}
            }
echo "This All Free TransactionID go back  if you want to Update Shipped"."<br>".
		"<form action=\"ShippingPage1.html\">".
		" <input type=\"submit\" value=\"Back\"/>" .
		"</form>";
       echo "<br>";
                 }
   	
  ?>

</body>

</html>