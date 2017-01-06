<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Cart</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	background-color: #FCC;
	background-image: url(6ca6f4c23e885d7964dd5248965e1bfb.jpg);
}
-->
</style></head>
<h1>Shopping Cart</h1>
<?php 
	$conn = mysqli_connect( "localhost", "root", "","shopping");
	
	$sql = "SELECT * FROM `orderprocessing` ";
	
	$result = mysqli_query($conn,$sql);
	if (!mysqli_query($conn,$sql)) {
		die('error'); 
		}
	echo "<table>";
	while($row = mysqli_fetch_assoc($result)){
		$trans_ID=$row['TransactionID'];
		$prod_ID=$row['ProductID'];
		//echo $trans_ID ;
echo $prod_ID ;
		
		$prodQuant =0;
		$sql ="SElECT * FROM product WHERE `ProductID`=$prod_ID";
	  $result1 = mysqli_query($conn,$sql);
	  $row1 = mysqli_fetch_assoc($result1) ;
	  $prodQuant= $row1["QuantityInStock"] ; 
		
		
	echo
	  "<tr><td>".
	 
	  "<br>"." Quantity in Stock= "  . $prodQuant.
	  
	  "<br>"."Your Product Quantity= "  . $row['Quantity'] .
	  
	  "<form method=\"post\" action=\"up.php\">".
	  "<b>If You want to Update Your Quantity please Enter your new Quantity<b>"."<br>".
	  "<input type=\"number\" name=\"newValue\"/>"."<br>".
	  "<input type=\"submit\" value=\"Update\"/>". 
	  "<input type=\"hidden\" value=\"$trans_ID\" name=\"trans\"/>".
	  "<input type=\"hidden\" value=\"$prodQuant\" name=\"stock\"/>".
	  "</form>".
	  
	  "<form method=\"post\" action=\"delete.php\">".
	  "<input type=\"submit\" value=\"Drop\"/>".
	  "<input type=\"hidden\" value=\"$trans_ID\" name=\"trans\"/>".	  
	  "</form>".
	  
	  "</td> </tr>" ; 
	}
	
	echo "</table>";
	
	
	mysqli_close($conn);
?>
<form action= "checkout.php" method="post"   >
<input type="submit" value="CheckOut" name="Submit" />
</form>
<body>
</body>
</html>