<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Card</title>
</head>
<?php
	$conn = mysqli_connect( "localhost", "root", "","shopping");
	
	
	$sel_pro = $_POST["trans"];
	$sql = "DELETE FROM `orderprocessing` WHERE `TransactionID`=$sel_pro";
		 
	mysqli_query($conn,$sql);
	if (!mysqli_query($conn,$sql)) {
		die('error');
		}
	echo "Your Quantity Has Been Dropped ".
		"<form action=\"shoppingCart.php\">".
		" <input type=\"submit\" value=\"GO To shopping cart\"/>" .
		"</form>";
?>
<body>
</body>
</html>