<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Updated Shopping Cart page</title>
</head>
<?php
	
	$conn = mysqli_connect( "localhost", "root", "","shopping");
	
	
	$sel_pro =$_POST["trans"];
	$new_value = $_POST["newValue"];
	$quan_stock = $_POST["stock"];
	if($new_value>$quan_stock || $new_value<0||$new_value==NULL){
		echo " <b><h3>ERROR<h3>: The Quantity you have entered is greater than the Quantity in Stock Please Enter The New quantity Right<b>"."<br>".
		"<form action=\"shoppingCart.php\">".
		" <input type=\"submit\" value=\"GO To Shopping Cart again \"/>" .
		"</form>";
		
	}
	
	else {$sql = "UPDATE `orderprocessing` SET `Quantity` =$new_value WHERE `TransactionID` =$sel_pro;"; 
					
	mysqli_query($conn,$sql);
	
	
	echo "<h3>Thanks<h3> : Your Quantity Has Been Updated "."<br>".
		"<form action=\"shoppingCart.php\">".
		" <input type=\"submit\" value=\" GO To Shopping cart again \"/>" .
		"</form>";
	
	}
?>
<body>
</body>
</html>