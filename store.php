<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>store</title>
<style type="text/css">
<!--
.n {
	font-size: 18px;
}
.n {
	font-size: 18px;
	font-weight: bold;
}
body {
	background-color: #FF9;
	background-image: url(a.jpg);
}
-->
</style>
</head>
<body>
<p class="n">All Product You Have IN Store </p>
<?php

	$conn = mysqli_connect( "localhost" , "root" , "" , "shopping" ) ;
	$sql = "SELECT * FROM `product`" ;

	$res = mysqli_query( $conn , $sql );
	
	
		echo "<form action='product.php' method='POST'>" ;
		
		echo "<select name='cusList'>";
			
			echo "<option> choose Product ... </option>";
			while ( $row = mysqli_fetch_array($res) ){
				
				echo "<option value = '".$row['ProductID']."' >".$row['ItemName']." </option>" ;
			}
		
		echo "</select>" ;
		echo "<input type = 'submit' name = 'Submit' value = 'Choose Product' >" ;
		
	echo "</form>" ;
	
			/*while ( $row = mysqli_fetch_array($res) ){
				echo  "<b>".$row['ItemName']."</b>";
				echo "</br>";
			}*/
				
				?>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span class="n">Add New Product</span> <a href="add.php"><img src="400_F_33242356_xlaJ4F4DRlo8DLQB0sUNVmdRRwvn8Xqw.jpg" width="98" height="72" /></a></p>
</body>
</html>